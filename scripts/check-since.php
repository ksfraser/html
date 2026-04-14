<?php
// scripts/check-since.php
// Checks staged PHP files (or full repo in --ci mode) for class/function/method docblocks
// containing @since with version and date, @param/@return tags, and type/name consistency.
// Supports a repository config file at .sincecheck.json to allow leniency.
// Exits 0 if all good (warnings allowed when lenient), non-zero on fatal errors.

// Load config (repo root: one level up from scripts/)
$configPath = dirname(__DIR__) . '/.sincecheck.json';
$DEFAULT_CONFIG = [
    'lenient' => false,
    'allow_missing_docblock' => false,
    'allow_missing_since' => false,
    'allow_param_missing' => false,
    'allow_param_count_mismatch' => false,
    'allow_param_name_mismatch' => false,
    'allow_param_type_mismatch' => false,
    'allow_missing_return' => false,
    'allow_type_mismatch' => false
];
$CONFIG = $DEFAULT_CONFIG;
if (file_exists($configPath)) {
    $json = @file_get_contents($configPath);
    $decoded = json_decode($json, true);
    if (is_array($decoded)) {
        $CONFIG = array_merge($DEFAULT_CONFIG, $decoded);
    }
}

/**
 * getStagedFiles
 *
 * @since v1.0.5 2026-04-14
 * @return array
 */
function getStagedFiles(): array {
    $cmd = 'git diff --cached --name-only --diff-filter=ACM';
    exec($cmd, $output, $rc);
    if ($rc !== 0) {
        // fallback: no git available
        return [];
    }
    return $output;
}

/**
 * getStagedFileContent
 *
 * @since v1.0.5 2026-04-14
 * @param string $path
 * @return ?string
 */
function getStagedFileContent(string $path): ?string {
    // Use git show to get the staged (index) version of the file
    $cmd = "git show :$path 2>/dev/null";
    $content = null;
    exec($cmd, $lines, $rc);
    if ($rc === 0) {
        $content = implode("\n", $lines);
    } elseif (file_exists($path)) {
        $content = file_get_contents($path);
    }
    return $content;
}

/**
 * containsSince
 *
 * @since v1.0.5 2026-04-14
 * @param string $docblock
 * @return bool
 */
function containsSince(string $docblock): bool {
    if (preg_match('/@since\s+v?\d+\.\d+(?:\.\d+)?\s*\(?\d{4}-\d{2}-\d{2}\)?/i', $docblock)) {
        return true;
    }
    return false;
}

/**
 * containsParam
 *
 * @since v1.0.5 2026-04-14
 * @param string $docblock
 * @return bool
 */
function containsParam(string $docblock): bool {
    return (bool) preg_match('/@param\s+/i', $docblock);
}

/**
 * containsReturn
 *
 * @since v1.0.5 2026-04-14
 * @param string $docblock
 * @return bool
 */
function containsReturn(string $docblock): bool {
    return (bool) preg_match('/@return\s+/i', $docblock);
}

/**
 * countParamTags
 *
 * @since v1.0.5 2026-04-14
 * @param string $docblock
 * @return int
 */
function countParamTags(string $docblock): int {
    if (preg_match_all('/@param\s+/i', $docblock, $m)) {
        return count($m[0]);
    }
    return 0;
}

/**
 * parseParamTags
 *
 * @since v1.0.5 2026-04-14
 * @param string $docblock
 * @return array
 */
function parseParamTags(string $docblock): array {
    $out = [];
    if (preg_match_all('/@param\s+([^\s]+)\s+(\$[A-Za-z0-9_]+)(?:\s|$)/i', $docblock, $m, PREG_SET_ORDER)) {
        foreach ($m as $row) {
            $out[] = ['type' => $row[1], 'name' => $row[2]];
        }
    }
    return $out;
}

/**
 * normalizeType
 *
 * @since v1.0.5 2026-04-14
 * @param ?string $t
 * @return string
 */
function normalizeType(?string $t): string {
    if ($t === null) return '';
    $s = trim($t);
    $s = ltrim($s, '\\');
    $s = preg_replace('/\s+/', ' ', $s);
    return strtolower($s);
}

/**
 * parseReturnTag
 *
 * @since v1.0.5 2026-04-14
 * @param string $docblock
 * @return ?string
 */
function parseReturnTag(string $docblock): ?string {
    if (preg_match('/@return\s+([^\s]+)/i', $docblock, $m)) {
        return $m[1];
    }
    return null;
}

/**
 * splitTypes
 *
 * @since v1.0.5 2026-04-14
 * @param string $type
 * @return array
 */
function splitTypes(string $type): array {
    $parts = preg_split('/\|/', $type);
    $out = [];
    foreach ($parts as $p) {
        $p = trim($p);
        if ($p === '') continue;
        $out[] = normalizeType($p);
    }
    sort($out);
    return $out;
}

/**
 * compareTypes
 *
 * @since v1.0.5 2026-04-14
 * @param string $sigType
 * @param string $tagType
 * @return bool
 */
function compareTypes(string $sigType, string $tagType): bool {
    $sigParts = splitTypes($sigType);
    $tagParts = splitTypes($tagType);
    return $sigParts === $tagParts;
}

/**
 * checkContent
 *
 * @since v1.0.5 2026-04-14
 * @param string $content
 * @param string $path
 * @param array $config
 * @return array
 */
function checkContent(string $content, string $path, array $config): array {
    $errors = [];
    $warnings = [];

    $add = function(string $type, array $entry) use (&$errors, &$warnings, $config) {
        $fatal = true;
        switch ($type) {
            case 'missing_docblock': $fatal = empty($config['allow_missing_docblock']); break;
            case 'missing_since': $fatal = empty($config['allow_missing_since']); break;
            case 'param_missing': $fatal = empty($config['allow_param_missing']); break;
            case 'param_count_mismatch': $fatal = empty($config['allow_param_count_mismatch']); break;
            case 'param_name_mismatch': $fatal = empty($config['allow_param_name_mismatch']); break;
            case 'param_type_mismatch': $fatal = empty($config['allow_param_type_mismatch']); break;
            case 'missing_return': $fatal = empty($config['allow_missing_return']); break;
            case 'return_type_mismatch': $fatal = empty($config['allow_type_mismatch']); break;
            case 'class_missing_since': $fatal = empty($config['allow_missing_since']); break;
            default: $fatal = true;
        }
        if ($fatal) $errors[] = $entry; else $warnings[] = $entry;
    };

    if (strpos($content, '<?php') === false) {
        $content = "<?php\n" . $content;
    }

    $tokens = token_get_all($content);
    $lastDoc = null;
    $count = count($tokens);

    for ($i = 0; $i < $count; $i++) {
        $tok = $tokens[$i];
        if (is_array($tok) && $tok[0] === T_DOC_COMMENT) {
            $lastDoc = $tok[1];
            continue;
        }

        if (is_array($tok) && in_array($tok[0], [T_CLASS, T_INTERFACE, T_TRAIT], true)) {
            $name = null;
            for ($j = $i + 1; $j < $count; $j++) {
                if (is_array($tokens[$j]) && $tokens[$j][0] === T_STRING) {
                    $name = $tokens[$j][1];
                    break;
                }
            }
            if ($lastDoc === null || !containsSince($lastDoc)) {
                $line = is_array($tok) ? $tok[2] ?? 0 : 0;
                $add('class_missing_since', ['path'=>$path,'line'=>$line,'entity'=>($tok[0] === T_CLASS ? 'class' : ($tok[0] === T_INTERFACE ? 'interface' : 'trait')) . ' ' . ($name ?? ''),'message'=>"Missing or malformed @since for {$name}"]);
            }
            $lastDoc = null;
            continue;
        }

        if (is_array($tok) && $tok[0] === T_FUNCTION) {
            $funcName = null;
            $params = [];
            $j = $i + 1;
            while ($j < $count) {
                $t = $tokens[$j];
                if (is_array($t) && $t[0] === T_STRING) { $funcName = $t[1]; $j++; break; }
                if (is_string($t) && ($t === '&' || trim($t) === '')) { $j++; continue; }
                if (is_string($t) && $t === '(') { break; }
                $j++;
            }

            $params = [];
            $paramTypes = [];
            while ($j < $count && !(is_string($tokens[$j]) && $tokens[$j] === '(')) { $j++; }
            if ($j < $count && is_string($tokens[$j]) && $tokens[$j] === '(') {
                $parenDepth = 0;
                $j++;
                $currentType = '';
                while ($j < $count) {
                    $t = $tokens[$j];
                    if (is_string($t)) {
                        if ($t === '(') { $parenDepth++; }
                        elseif ($t === ')') { if ($parenDepth === 0) { break; } $parenDepth--; }
                        elseif ($t === '?' ) { $currentType .= '?'; }
                    } else {
                        if (in_array($t[0], [T_STRING, T_ARRAY, T_CALLABLE, T_NS_SEPARATOR], true)) {
                            $currentType .= $t[1];
                        } elseif ($t[0] === T_WHITESPACE) {
                            if ($currentType !== '') $currentType .= ' ';
                        } elseif ($t[0] === T_VARIABLE) {
                            $params[] = $t[1];
                            $paramTypes[] = trim($currentType) === '' ? null : trim($currentType);
                            $currentType = '';
                        }
                    }
                    $j++;
                }
            }

            $signatureReturnType = null;
            $k = $j;
            while ($k < $count && is_array($tokens[$k]) && $tokens[$k][0] === T_WHITESPACE) { $k++; }
            if ($k < $count && is_string($tokens[$k]) && $tokens[$k] === ':') {
                $k++;
                $rt = '';
                while ($k < $count) {
                    $t = $tokens[$k];
                    if (is_string($t)) {
                        if ($t === '{' || $t === ';' || $t === ',') break;
                        if ($t === '|' || $t === '?') { $rt .= $t; }
                    } else {
                        if (in_array($t[0], [T_STRING, T_NS_SEPARATOR, T_ARRAY, T_CALLABLE], true)) {
                            $rt .= $t[1];
                        } elseif ($t[0] === T_WHITESPACE) {
                            $rt .= ' ';
                        }
                    }
                    $k++;
                }
                $signatureReturnType = trim($rt);
            }

            if ($lastDoc === null) {
                $line = is_array($tok) ? $tok[2] ?? 0 : 0;
                $add('missing_docblock', ['path'=>$path,'line'=>$line,'entity'=>'function ' . ($funcName ?? '(anonymous)'),'message'=>"Missing docblock for function/method " . ($funcName ?? '(anonymous)')]);
            } else {
                if (!containsSince($lastDoc)) {
                    $line = is_array($tok) ? $tok[2] ?? 0 : 0;
                    $add('missing_since', ['path'=>$path,'line'=>$line,'entity'=>'function ' . ($funcName ?? '(anonymous)'),'message'=>"Missing or malformed @since for function/method " . ($funcName ?? '(anonymous)')]);
                }
                if (count($params) > 0) {
                    $paramTags = parseParamTags($lastDoc);
                    $paramCount = count($paramTags);
                    if ($paramCount === 0) {
                        $line = is_array($tok) ? $tok[2] ?? 0 : 0;
                        $add('param_missing', ['path'=>$path,'line'=>$line,'entity'=>'function ' . ($funcName ?? '(anonymous)'),'message'=>"Docblock missing @param tags for function/method " . ($funcName ?? '(anonymous)')]);
                    } elseif ($paramCount !== count($params)) {
                        $line = is_array($tok) ? $tok[2] ?? 0 : 0;
                        $add('param_count_mismatch', ['path'=>$path,'line'=>$line,'entity'=>'function ' . ($funcName ?? '(anonymous)'),'message'=>"@param count ({$paramCount}) does not match parameter count (" . count($params) . ") for " . ($funcName ?? '(anonymous)')]);
                    } else {
                        for ($k = 0; $k < $paramCount; $k++) {
                            $tag = $paramTags[$k];
                            $sigName = $params[$k] ?? null;
                            $sigType = $paramTypes[$k] ?? null;
                            if ($sigName !== $tag['name']) {
                                $line = is_array($tok) ? $tok[2] ?? 0 : 0;
                                $add('param_name_mismatch', ['path'=>$path,'line'=>$line,'entity'=>'function ' . ($funcName ?? '(anonymous)'),'message'=>"@param name {$tag['name']} does not match signature parameter {$sigName} for " . ($funcName ?? '(anonymous)')]);
                            }
                            if ($sigType !== null && !empty($tag['type'])) {
                                if (normalizeType($sigType) !== normalizeType($tag['type'])) {
                                    $line = is_array($tok) ? $tok[2] ?? 0 : 0;
                                    $add('param_type_mismatch', ['path'=>$path,'line'=>$line,'entity'=>'function ' . ($funcName ?? '(anonymous)'),'message'=>"@param type {$tag['type']} does not match signature type {$sigType} for {$sigName}"]);
                                }
                            }
                        }
                    }
                }
                if (!containsReturn($lastDoc)) {
                    $line = is_array($tok) ? $tok[2] ?? 0 : 0;
                    $add('missing_return', ['path'=>$path,'line'=>$line,'entity'=>'function ' . ($funcName ?? '(anonymous)'),'message'=>"Docblock missing @return tag for function/method " . ($funcName ?? '(anonymous)')]);
                } else {
                    $tagReturn = parseReturnTag($lastDoc);
                    if ($signatureReturnType !== null && $tagReturn !== null) {
                        if (!compareTypes($signatureReturnType, $tagReturn)) {
                            $line = is_array($tok) ? $tok[2] ?? 0 : 0;
                            $add('return_type_mismatch', ['path'=>$path,'line'=>$line,'entity'=>'function ' . ($funcName ?? '(anonymous)'),'message'=>"@return type {$tagReturn} does not match signature return type {$signatureReturnType} for " . ($funcName ?? '(anonymous)')]);
                        }
                    }
                }
            }

            $lastDoc = null;
            continue;
        }
    }

    return ['errors'=>$errors,'warnings'=>$warnings];
}

// Main
$isCI = in_array('--ci', $argv ?? []);
$allErrors = [];
$allWarnings = [];

if ($isCI) {
    exec('git ls-files "*.php"', $files, $rc);
    if ($rc !== 0 || empty($files)) {
        $files = [];
        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(dirname(__DIR__)));
        foreach ($it as $f) {
            if ($f->isFile() && preg_match('/\.php$/i', $f->getFilename())) {
                $files[] = substr($f->getPathname(), strlen(dirname(__DIR__)) + 1);
            }
        }
    }
    $phpFiles = $files;
} else {
    $staged = getStagedFiles();
    $phpFiles = array_filter($staged, function($f){ return preg_match('/\.php$/i', $f); });
}

foreach ($phpFiles as $file) {
    $content = $isCI ? file_get_contents($file) : getStagedFileContent($file);
    if ($content === null) continue;
    $result = checkContent($content, $file, $CONFIG);
    if (!empty($result['errors'])) $allErrors = array_merge($allErrors, $result['errors']);
    if (!empty($result['warnings'])) $allWarnings = array_merge($allWarnings, $result['warnings']);
}

if (!empty($allErrors) || !empty($allWarnings)) {
    if (!empty($allErrors)) {
        echo "ERROR: Missing or malformed docblocks detected:\n\n";
        foreach ($allErrors as $e) {
            echo "- {$e['path']}:{$e['line']} — {$e['entity']}: {$e['message']}\n";
        }
    }
    if (!empty($allWarnings)) {
        echo "\nWARNING: Issues found (lenient config allows these but review recommended):\n\n";
        foreach ($allWarnings as $w) {
            echo "- {$w['path']}:{$w['line']} — {$w['entity']}: {$w['message']}\n";
        }
    }
    echo "\nRequirements:\n";
    echo "- Add a PHPDoc docblock immediately above the entity declaring @since vX.Y.Z YYYY-MM-DD\n";
    echo "Example:\n";
    echo "/**\n * Brief description.\n *\n * @since v1.2.0 2026-04-11\n * @param string \$name\n * @return void\n */\nfunction example() {}\n";
}

if (!empty($allErrors)) {
    exit(2);
}

exit(0);
