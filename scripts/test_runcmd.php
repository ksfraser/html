<?php
/**
	 * Function runCmdArr
	 *
	 * @since v1.0.0 2026-04-14
	 * @param array $argv
	 * @return void
 */
function runCmdArr(array $argv) {
    $cmdDisplay = implode(' ', array_map(function($a){ return is_scalar($a)?$a:'<arg>'; }, $argv));
    echo "RUN-ARR: $cmdDisplay\n";
    $descriptorspec = [1 => ['pipe','w'], 2 => ['pipe','w']];
    $process = proc_open($argv, $descriptorspec, $pipes);
    if (!is_resource($process)) { echo "proc_open failed\n"; exit(1); }
    $out = stream_get_contents($pipes[1]); fclose($pipes[1]);
    $err = stream_get_contents($pipes[2]); fclose($pipes[2]);
    $rc = proc_close($process);
    echo "RC=$rc\n";
    echo "OUT:\n" . $out . "\n";
    echo "ERR:\n" . $err . "\n";
}

$file='src/Ksfraser/HTML/AbstractStylesheetManager.php';
$pattern=':AbstractStylesheetManager::getCommonStylesheets:'.$file;
runCmdArr(['git','log','-L',$pattern,'--pretty=format:%H|%ad','--date=short','--',$file]);
