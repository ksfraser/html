<?php
// scripts/normalize-docblocks.php
// Parse and normalize PHP docblocks per project style.
// Usage: php scripts/normalize-docblocks.php [path]
// Default path: src/Ksfraser/HTML

$path = $argv[1] ?? 'src/Ksfraser/HTML';
$root = getcwd();

function listPhpFiles(string $path): array {
    $files = [];
    if (is_file($path) && str_ends_with($path, '.php')) return [$path];
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
    foreach ($it as $f) {
        if ($f->isFile() && str_ends_with($f->getFilename(), '.php')) $files[] = $f->getPathname();
    }
    return $files;
}

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
        foreach ($parsed['tags']['since'] as $v) $out[] = ' * @since ' . $v;
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
    }
    $out[] = ' */';
    return $out;
}

// Process files
$backup = [];
$files = listPhpFiles($path);
foreach ($files as $file) {
    $src = file_get_contents($file);
    // store content for callback access
    $GLOBALS['__file_content'] = $src;
    $new = preg_replace_callback('#(^\s*)/\*\*(.*?)\*/#ms', function($m) use (&$backup, $file) {
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
