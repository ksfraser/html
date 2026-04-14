<?php
// scripts/suggest-since.php
// Suggest @since tags per file using git history (creation commit and nearest tag)
$files = array_slice($argv, 1);
if (empty($files)) {
    exec('git ls-files "*.php"', $filesOut, $rc);
    $files = $filesOut ?? [];
}

foreach ($files as $file) {
    $file = trim($file);
    if ($file === '') continue;
    // find creation commit
    $cmd = sprintf('git log --diff-filter=A --follow --format=%%H|%%ad --date=short -- %s', escapeshellarg($file));
    exec($cmd, $out, $rc);
    $commit = null; $date = null;
    if ($rc === 0 && !empty($out)) {
        $last = end($out);
        list($commit, $date) = explode('|', $last) + [null, null];
    }
    if (!$commit) {
        // fallback to last modified
        $cmd = sprintf('git log -1 --format=%%H|%%ad --date=short -- %s', escapeshellarg($file));
        exec($cmd, $out2, $rc2);
        if ($rc2 === 0 && !empty($out2)) {
            list($commit, $date) = explode('|', $out2[0]) + [null, null];
        }
    }
    $tag = null;
    if ($commit) {
        $cmd = sprintf('git describe --tags --abbrev=0 %s 2>/dev/null', escapeshellarg($commit));
        exec($cmd, $tOut, $tRc);
        if ($tRc === 0 && !empty($tOut)) {
            $tag = trim($tOut[0]);
        }
    }
    if (!$tag) {
        // try to read composer.json version
        $composer = @json_decode(@file_get_contents('composer.json'), true);
        if (isset($composer['version']) && $composer['version']) {
            $tag = 'v' . $composer['version'];
        } else {
            $tag = 'v0.0.0';
        }
    }
    if (!$date) {
        $date = date('Y-m-d');
    }
    echo $file . " => @since {$tag} {$date}\n";
}
