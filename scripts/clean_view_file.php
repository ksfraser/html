<?php
if ($argc < 2) { fwrite(STDERR, "Usage: php clean_view_file.php <file>\n"); exit(2); }
$path = $argv[1]; if (!is_file($path)) { fwrite(STDERR, "File not found: $path\n"); exit(3); }
$lines = file($path);
$out = [];
foreach ($lines as $ln) {
    // remove lines that are standalone doc fragments or stars
    if (preg_match('/^\s*\*.*$/', $ln)) continue;
    if (preg_match('/^\s*\/\*\*/', $ln)) continue;
    if (preg_match('/^\s*\/\*/', $ln)) continue;
    if (preg_match('/^\s*\*\//', $ln)) continue;
    // remove lines that look like @since/@param/@return tags
    if (preg_match('/^\s*@(since|param|return)\b/i', trim($ln))) continue;
    // also remove lines that start with 'Function ' inside comments
    if (preg_match('/^\s*Function\s+\w+/', $ln)) continue;
    $out[] = $ln;
}
// collapse multiple blank lines
$result = preg_replace("/\n{3,}/", "\n\n", implode('', $out));
file_put_contents($path, $result);
echo "Cleaned $path\n";
?>