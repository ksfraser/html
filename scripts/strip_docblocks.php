<?php
// strips /** ... */ docblocks from a file and rewrites it
if ($argc < 2) {
    fwrite(STDERR, "Usage: php strip_docblocks.php <file>\n");
    exit(2);
}
$path = $argv[1];
if (!is_file($path)) { fwrite(STDERR, "File not found: $path\n"); exit(3); }
$src = file_get_contents($path);
// remove docblocks: /** ... */ (non-greedy)
$clean = preg_replace('#/\*\*.*?\*/#s', '', $src);
// also collapse multiple blank lines
$clean = preg_replace("/\n{3,}/", "\n\n", $clean);
file_put_contents($path, $clean);
echo "Stripped docblocks from $path\n";
?>