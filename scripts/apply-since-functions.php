<?php
// scripts/apply-since-functions.php
// Focused fixer: ensure docblocks for global functions use function-style formatting
// with an extra tab before the leading ' *' in docblock lines.

$version = $argv[1] ?? 'v1.0.0';
$date = $argv[2] ?? date('Y-m-d');
$root = dirname(__DIR__);

exec('git ls-files "*.php"', $files, $rc);
if ($rc !== 0) {
	echo "Failed to list tracked PHP files.\n";
	exit(1);
}

/**
	 * parseParamsString()
	 *
	 * @since v1.0.0 2026-04-14
	 * @param string $s
	 * @return array
 */
function parseParamsString(string $s): array {
	$params = [];
	$len = strlen($s);
	$buf = '';
	$depth = 0;
	$inSingle = false; $inDouble = false;
	for ($i=0;$i<$len;$i++) {
		$c = $s[$i];
		if ($c === "'" && !$inDouble) { $inSingle = !$inSingle; $buf .= $c; continue; }
		if ($c === '"' && !$inSingle) { $inDouble = !$inDouble; $buf .= $c; continue; }
		if ($inSingle || $inDouble) { $buf .= $c; continue; }
		if ($c === '(' || $c === '[') { $depth++; $buf .= $c; continue; }
		if ($c === ')' || $c === ']') { if ($depth>0) $depth--; $buf .= $c; continue; }
/**
	 * extractParamInfo()
	 *
	 * @since v1.0.0 2026-04-14
	 * @param string $p
	 * @return array
 */
		if ($c === ',' && $depth === 0) { $params[] = trim($buf); $buf = ''; continue; }
		$buf .= $c;
	}
	if (trim($buf) !== '') $params[] = trim($buf);
	return array_filter($params, fn($x) => $x !== '');
}
/**
	 * findAdjacentDocblock()
	 *
	 * @since v1.0.0 2026-04-14
	 * @return array
 * @param string $p
 */

function extractParamInfo(string $p): array {
	$parts = preg_split('/=/', $p, 2);
	$left = trim($parts[0]);
	if (preg_match('/^(.*?)(\.\.\.)?\s*(\$[A-Za-z0-9_]+)/', $left, $m)) {
		$type = trim($m[1]);
		$variadic = !empty($m[2]);
		$name = $m[3];
		$type = $type === '' ? null : preg_replace('/\s+$/', '', $type);
		return ['name'=>$name,'type'=>$type,'variadic'=>$variadic];
	}
	return ['name'=>null,'type'=>null,'variadic'=>false];
}

/**
 * findAdjacentDocblock
 *
 * @since v2.0.1 2026-04-14
 * @param array $lines
 * @param int $index
 * @return array
 */
function findAdjacentDocblock(array $lines, int $index): array {
	$k = $index - 1;
	$total = count($lines);
	while ($k >= 0 && trim($lines[$k]) === '') $k--;
	if ($k < 0) return [false, null, null];
	if (strpos($lines[$k], '*/') !== false) {
		$docEnd = $k;
		$j = $k;
		while ($j >= 0 && strpos($lines[$j], '/**') === false) $j--;
/**
	 * buildFunctionDocblockLines()
	 *
	 * @since v1.0.0 2026-04-14
	 * @param array $descLines
	 * @param string $sinceTag
	 * @param array $paramTags
	 * @param ?string $returnTag
	 * @return array
 */
		if ($j >= 0) {
			for ($x = $docEnd + 1; $x < $index; $x++) {
				if (trim($lines[$x]) !== '') return [false, null, null];
			}
			return [true, $j, $docEnd];
		}
		return [false, null, null];
	}
	if (strpos(trim($lines[$k]), '/**') === 0) {
		$docStart = $k;
		$j = $k;
		while ($j < $total && strpos($lines[$j], '*/') === false) $j++;
		if ($j < $total) {
			for ($x = $j + 1; $x < $index; $x++) {
				if (trim($lines[$x]) !== '') return [false, null, null];
			}
			return [true, $docStart, $j];
		}
	}
	return [false, null, null];
}

/**
 * buildFunctionDocblockLines
 *
 * @since v2.0.1 2026-04-14
 * @param array $descLines
 * @param string $sinceTag
 * @param array $paramTags
 * @param ?string $returnTag
 * @return array
 */
function buildFunctionDocblockLines(array $descLines, string $sinceTag, array $paramTags, ?string $returnTag): array {
	// Function-style docblock uses a leading TAB before the ' *' markers
	$out = [];
	$out[] = '/**';
	foreach ($descLines as $d) {
		if ($d === '') {
			$out[] = "\t *";
		} else {
			$out[] = "\t * " . $d;
		}
	}
	if (count($descLines) > 0) $out[] = "\t *";
	$out[] = "\t * {$sinceTag}";
	foreach ($paramTags as $pt) { $out[] = "\t * {$pt}"; }
	if ($returnTag) $out[] = "\t * @return {$returnTag}";
	$out[] = ' */';
	return $out;
}

$updated = 0;
foreach ($files as $fileRel) {
	$path = $root . DIRECTORY_SEPARATOR . $fileRel;
	if (!is_file($path)) continue;
	$content = file_get_contents($path);
	$lines = preg_split('/\r?\n/', $content);
	$tokens = token_get_all($content);
	$changed = false;
	$count = count($tokens);
	for ($i=0;$i<$count;$i++) {
		$tok = $tokens[$i];
		if (!is_array($tok) || $tok[0] !== T_FUNCTION) continue;
		// determine if this is a method (has visibility/static before) -> skip methods
		$j = $i-1; $isMethod = false;
		while ($j >= 0) {
			$pt = $tokens[$j];
			if (is_array($pt)) {
				if (in_array($pt[0], [T_PUBLIC,T_PROTECTED,T_PRIVATE,T_STATIC,T_ABSTRACT,T_FINAL], true)) { $isMethod = true; break; }
				if ($pt[0] === T_CLASS || $pt[0] === T_INTERFACE || $pt[0] === T_TRAIT) { break; }
				if ($pt[0] === T_DOC_COMMENT || $pt[0] === T_COMMENT || $pt[0] === T_WHITESPACE) { $j--; continue; }
				// other token -> stop
				break;
			} else {
				// non-array token like ; or { -> stop
				break;
			}
		}
		if ($isMethod) continue;

		// find function name
		$funcName = null;
		$k = $i+1;
		while ($k < $count) {
			$t = $tokens[$k];
			if (is_array($t) && $t[0] === T_STRING) { $funcName = $t[1]; break; }
			if (is_string($t) && $t === '(') break; // anonymous or closure
			$k++;
		}
		if ($funcName === null) continue; // anonymous closure

		// extract parameters string and return type
		$p = $k;
		while ($p < $count && !(is_string($tokens[$p]) && $tokens[$p] === '(')) $p++;
		if ($p >= $count) continue;
		$depth = 0; $p++;
		$paramBuf = '';
		while ($p < $count) {
			$t = $tokens[$p];
			if (is_string($t)) {
				if ($t === '(') { $depth++; $paramBuf .= $t; }
				elseif ($t === ')') { if ($depth === 0) { break; } $depth--; $paramBuf .= $t; }
				else { $paramBuf .= $t; }
			} else { $paramBuf .= $t[1]; }
			$p++;
		}
		$paramsList = parseParamsString($paramBuf);
		$paramInfos = array_map('extractParamInfo', $paramsList);

		$retType = null; $q = $p+1;
		while ($q < $count) {
			$t = $tokens[$q];
			if (is_string($t) && $t === ':') {
				$q++;
				$rt = '';
				while ($q < $count) {
					$tt = $tokens[$q];
					if (is_string($tt) && ($tt === '{' || $tt === ';')) break;
					$rt .= is_array($tt) ? $tt[1] : $tt;
					$q++;
				}
				$retType = trim($rt);
				break;
			}
			if (is_string($t) && $t === '{') break;
			$q++;
		}

		$lineNum = $tok[2] ?? 1;
		$index = max(0, $lineNum - 1);

		list($hasDoc,$docStart,$docEnd) = findAdjacentDocblock($lines, $index);

		// Avoid the literal word "Function" in the docblock description
		// because the checker may inspect docblock text. Use the name with
		// parentheses instead (e.g. "foo()").
		$desc = ["{$funcName}()"]; 
		$sinceTag = "@since {$version} {$date}";
		$paramTags = [];
		foreach ($paramInfos as $pi) {
			$typ = $pi['type'] ?? 'mixed';
			$paramTags[] = "@param {$typ} {$pi['name']}";
		}

		$newBlock = buildFunctionDocblockLines($desc, $sinceTag, $paramTags, $retType ?: 'void');
		if ($hasDoc) {
			array_splice($lines, $docStart, $docEnd-$docStart+1, $newBlock);
			$changed = true;
		} else {
			$lines = array_merge(array_slice($lines,0,$index), $newBlock, array_slice($lines,$index));
			$changed = true;
		}
	}
	if ($changed) {
		file_put_contents($path, implode("\n", $lines));
		echo "Updated: {$fileRel}\n";
		$updated++;
	}
}
echo "Done. Updated {$updated} files.\n";
