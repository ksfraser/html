<?php
// scripts/normalize-docblocks.php
// Parse and normalize PHP docblocks per project style.
// Usage: php scripts/normalize-docblocks.php [path]
// Default path: src/Ksfraser/HTML

$path = $argv[1] ?? 'src/Ksfraser/HTML';
$root = getcwd();

// If a checker report exists, limit processing to files referenced there
$checkerReport = $root . DIRECTORY_SEPARATOR . '.since-check-output.utf8.txt';
$targetFilesFromChecker = [];
if (file_exists($checkerReport)) {
    $lines = file($checkerReport, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $ln) {
        if (strpos($ln, '- ') === 0) {
            // format: - path:line — rest
            $parts = preg_split('/\s+—\s+/', $ln, 2);
            $left = $parts[0] ?? $ln;
            $left = preg_replace('/^-\s*/', '', $left);
            $colon = strpos($left, ':');
            if ($colon !== false) $left = substr($left, 0, $colon);
            $left = trim($left);
            if ($left !== '') $targetFilesFromChecker[$left] = true;
        }
    }
    $targetFilesFromChecker = array_keys($targetFilesFromChecker);
}

/**
 * listPhpFiles
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $path
 * @return array
 */
/**
 * listPhpFiles
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $path
 * @return array
 */
function listPhpFiles(string $path): array {
    $files = [];
    if (is_file($path) && str_ends_with($path, '.php')) return [$path];
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
    foreach ($it as $f) {
        if ($f->isFile() && str_ends_with($f->getFilename(), '.php')) $files[] = $f->getPathname();
    }
    return $files;
}

/**
 * parseParamsString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $s
 * @return array
 */
/**
 * parseParamsString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $s
 * @return array
 */
function parseParamsString(string $s): array {
    $params = [];
    $len = strlen($s);
    $buf = '';
    $depth = 0; $inSingle = false; $inDouble = false;
    for ($i=0;$i<$len;$i++) {
        $c = $s[$i];
        if ($c === "'" && !$inDouble) { $inSingle = !$inSingle; $buf .= $c; continue; }
        if ($c === '"' && !$inSingle) { $inDouble = !$inDouble; $buf .= $c; continue; }
        if ($inSingle || $inDouble) { $buf .= $c; continue; }
        if ($c === '(' || $c === '[') { $depth++; $buf .= $c; continue; }
        if ($c === ')' || $c === ']') { if ($depth>0) $depth--; $buf .= $c; continue; }
        if ($c === ',' && $depth === 0) { $params[] = trim($buf); $buf = ''; continue; }
        $buf .= $c;
    }
    if (trim($buf) !== '') $params[] = trim($buf);
    return array_filter($params, fn($x) => $x !== '');
}

/**
 * extractParamNamesFromSignature
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sig
 * @return array
 */
/**
 * extractParamNamesFromSignature
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sig
 * @return array
 */
function extractParamNamesFromSignature(string $sig): array {
    // $sig contains the parameter list between parentheses
    $parts = parseParamsString($sig);
    $names = [];
    foreach ($parts as $p) {
        // remove default
        $pp = preg_split('/=/', $p, 2)[0];
        if (preg_match('/(\$[A-Za-z0-9_]+)/', $pp, $m)) {
            $names[] = $m[1];
        }
    }
    return $names;
}

/**
 * parseDocblock
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $block
 * @return array
 */
/**
 * parseDocblock
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $block
 * @return array
 */
function parseDocblock(string $block): array {
    $lines = preg_split('/\r?\n/', $block);
    // strip opening/closing
    if (trim($lines[0]) === '/**') array_shift($lines);
    if (count($lines) > 0 && strpos(end($lines), '*/') !== false) {
        array_pop($lines);
    }
    $desc = [];
    $tags = [];
    foreach ($lines as $ln) {
        $t = preg_replace('/^\s*\*\s?/', '', $ln);
        if (preg_match('/^@(\w+)\b(.*)/', $t, $m)) {
            $tag = $m[1]; $rest = trim($m[2]);
            if (!isset($tags[$tag])) $tags[$tag] = [];
            $tags[$tag][] = $rest;
        } else {
            $desc[] = $t;
        }
    }
    // derive short/long description
    $short = '';
    $long = [];
    foreach ($desc as $d) {
        if ($short === '' && trim($d) !== '') { $short = $d; continue; }
        $long[] = $d;
    }
    return ['short'=>$short, 'long'=>$long, 'tags'=>$tags];
}

/**
 * buildDocblock
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $parsed
 * @param mixed $sigParamOrder
 * @return array
 */
/**
 * buildDocblock
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $parsed
 * @param mixed $sigParamOrder
 * @return array
 */
function buildDocblock(array $parsed, array $sigParamOrder = []): array {
    $out = [];
    $out[] = '/**';
    if ($parsed['short'] !== '') {
        $out[] = ' * ' . $parsed['short'];
    }
    if (count(array_filter($parsed['long'], fn($x) => trim($x) !== '')) > 0) {
        $out[] = ' *';
        foreach ($parsed['long'] as $l) { $out[] = ' * ' . $l; }
    }
    // blank line before tags
    $out[] = ' *';
    // order: deprecated, since, other tags (except param/return), params (ordered by signature), return
    if (isset($parsed['tags']['deprecated'])) {
        foreach ($parsed['tags']['deprecated'] as $v) $out[] = ' * @deprecated ' . $v;
    }
    if (isset($parsed['tags']['since'])) {
        foreach ($parsed['tags']['since'] as $v) {
            $out[] = ' * @since ' . normalizeSinceTag($v);
        }
    }
    // other tags
    foreach ($parsed['tags'] as $tag => $vals) {
        if (in_array($tag, ['deprecated','since','param','return'])) continue;
        foreach ($vals as $v) $out[] = ' * @' . $tag . ' ' . $v;
    }
    // params: try to order by signature
    $paramTags = $parsed['tags']['param'] ?? [];
    $paramMap = [];
    foreach ($paramTags as $pt) {
            if (preg_match('/^(\S+)\s+(\$[A-Za-z0-9_]+)(.*)$/', $pt, $m)) {
            $type = $m[1]; $name = $m[2]; $rest = trim($m[3]);
                // normalize union type spacing (align with checker expectations)
                $type = preg_replace('/\s*\|\s*/', '|', $type);
                if ($type === '') $type = 'mixed';
        } elseif (preg_match('/^(\$[A-Za-z0-9_]+)(.*)$/', $pt, $m)) {
            $type = ''; $name = $m[1]; $rest = trim($m[2]);
        } else { $name = null; $type = ''; $rest = $pt; }
        if ($name) $paramMap[$name] = trim(($type ? $type . ' ' : '') . $name . ' ' . $rest);
    }
    // order according signature
    foreach ($sigParamOrder as $pname) {
        if (isset($paramMap[$pname])) $out[] = ' * @param ' . $paramMap[$pname];
    }
    // any remaining params
    foreach ($paramMap as $name => $raw) {
        if (!in_array($name, $sigParamOrder)) $out[] = ' * @param ' . $raw;
    }
    // return
    if (isset($parsed['tags']['return'])) {
        foreach ($parsed['tags']['return'] as $v) $out[] = ' * @return ' . $v;
    } else {
        // default when missing
        $out[] = ' * @return void';
    }
    $out[] = ' */';
    return $out;
}

/**
 * normalizeSinceTag
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $raw
 * @return string
 */
/**
 * normalizeSinceTag
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $raw
 * @return string
 */
function normalizeSinceTag(string $raw): string {
    $raw = trim($raw);
    // If raw is an 8-digit date like 20251020, convert to 2025-10-20
    if (preg_match('/^(\d{4})(\d{2})(\d{2})$/', $raw, $m)) {
        $date = "{$m[1]}-{$m[2]}-{$m[3]}";
        // try to map to a version using optional mapping file
        $ver = mapDateToVersion($date);
        return trim(($ver ? $ver : 'v0.0.1') . ' ' . $date);
    }
    // If raw contains a date and a version, normalize the date format
    if (preg_match('/(v?\d+\.\d+(?:\.\d+)?)\s+(\d{4})(\d{2})(\d{2})/', $raw, $m)) {
        $ver = $m[1]; $date = "{$m[2]}-{$m[3]}-{$m[4]}";
        return trim($ver . ' ' . $date);
    }
    if (preg_match('/(v?\d+\.\d+(?:\.\d+)?)\s+(\d{4}-\d{2}-\d{2})/', $raw, $m)) {
        return trim($m[1] . ' ' . $m[2]);
    }
    // If raw looks like a date with hyphens, just keep it
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $raw)) return $raw;
    // If raw is just a version, add no date
    if (preg_match('/^v?\d+\.\d+(?:\.\d+)?$/', $raw)) return $raw;
    // Fallback: return as-is
    return $raw;
}

/**
 * mapDateToVersion
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $date
 * @return ?string
 */
/**
 * mapDateToVersion
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $date
 * @return ?string
 */
function mapDateToVersion(string $date): ?string {
    // Look for a mapping file at scripts/since-tag-map.json
    $mapFile = __DIR__ . '/since-tag-map.json';
    if (!file_exists($mapFile)) return null;
    $json = @file_get_contents($mapFile);
    $data = json_decode($json, true);
    if (!is_array($data) || empty($data['tags'])) return null;
    // tags: array of {"tag":"v1.2.3","date":"YYYY-MM-DD"}
    $cand = null;
    foreach ($data['tags'] as $entry) {
        if (empty($entry['tag']) || empty($entry['date'])) continue;
        if ($entry['date'] <= $date) {
            // choose the latest tag on or before date
            if ($cand === null || $entry['date'] > $cand['date']) $cand = $entry;
        }
    }
    if ($cand) return $cand['tag'];
    return null;
}

// Process files
$backup = [];
$files = listPhpFiles($path);
foreach ($files as $file) {
    $src = file_get_contents($file);
    // store content for callback access
    $GLOBALS['__file_content'] = $src;
    $new = preg_replace_callback('#(^\s*)/\*\*(.*?)\*/#ms', /**
 * (anonymous)
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $m
 * @return void
 */
/**
 * (anonymous)
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $m
 * @return void
 */
function($m) use (&$backup, $file) {
        $indent = $m[1];
        $block = '/**' . $m[2] . '*/';
        $parsed = parseDocblock($block);
        // find signature after this block in a short window
        $rest = substr($GLOBALS['__file_content'], strpos($GLOBALS['__file_content'], $m[0]) + strlen($m[0]));
        $sigParamOrder = [];
        if (preg_match('/function\s+&?\s*[A-Za-z0-9_]+\s*\(([^)]*)\)/i', $rest, $sig)) {
            $sigParamOrder = extractParamNamesFromSignature($sig[1]);
        }
        $built = buildDocblock($parsed, $sigParamOrder);
        $backup[] = ['file'=>$file,'original'=>$block,'normalized'=>implode("\n", $built)];
        $out = $indent . implode("\n$indent", $built);
        return $out;
    }, $src, -1, $count);
    if ($count && $new !== $src) {
        file_put_contents($file, $new);
        echo "Updated: $file\n";
    }
}

if (!empty($backup)) {
    $dump = ['generated_at'=>date('c'),'entries'=>$backup];
    file_put_contents('scripts/docblocks-backup.json', json_encode($dump, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));
    echo "Wrote backup to scripts/docblocks-backup.json\n";
}

echo "Done. Processed " . count($files) . " files.\n";
