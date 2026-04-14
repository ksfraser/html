<?php
// scripts/strip-stray-stars.php
// Remove lines that start with '*' but are not inside a /** ... */ docblock.
if ($argc < 2) { fwrite(STDERR, "Usage: php strip-stray-stars.php <file>\n"); exit(2); }
$path = $argv[1];
if (!is_file($path)) { fwrite(STDERR, "File not found: $path\n"); exit(3); }
$lines = file($path);
$out = [];
$inBlock = false;
foreach ($lines as $ln) {
    $trim = rtrim($ln, "\r\n");
    if (strpos($trim, '/**') !== false) { $inBlock = true; $out[] = $ln; continue; }
    if ($inBlock) {
        $out[] = $ln;
        if (strpos($trim, '*/') !== false) { $inBlock = false; }
        continue;
    }
    // not in docblock: remove lines that start with optional whitespace then '*' and a space
    if (preg_match('/^\s*\*\s+/', $trim)) {
        // skip this stray star line
        continue;
    }
    $out[] = $ln;
}
file_put_contents($path, implode('', $out));
echo "Cleaned stray star lines in $path\n";
