<?php
/**
 * PHPUnit bootstrap file for legacy VIEW classes
 * 
 * This bootstrap file loads the archived VIEW_* classes that are still
 * being tested. These classes have been moved to the archived/ directory
 * but tests remain for backward compatibility verification.
 */

// Load composer autoloader if it exists
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

// Legacy classes sometimes do require_once('class.origin.php') or similar.
// Provide local test stubs first in the include_path so we don't accidentally
// pull in the monorepo-root legacy files (which may depend on a full FA install).
$stubsDir = __DIR__ . '/stubs';
set_include_path($stubsDir . PATH_SEPARATOR . get_include_path());

// Load the main VIEW class
require_once __DIR__ . '/../src/Ksfraser/HTML/class.VIEW.php';

// Load archived VIEW_* classes for testing
require_once __DIR__ . '/../src/Ksfraser/HTML/archived/class.VIEW_TABLE.php';
require_once __DIR__ . '/../src/Ksfraser/HTML/archived/class.VIEW_ROW.php';
require_once __DIR__ . '/../src/Ksfraser/HTML/archived/class.VIEW_CELL.php';
require_once __DIR__ . '/../src/Ksfraser/HTML/archived/class.VIEW_AMOUNT_CELL.php';
require_once __DIR__ . '/../src/Ksfraser/HTML/archived/class.VIEW_DATE_CELL.php';
require_once __DIR__ . '/../src/Ksfraser/HTML/archived/class.VIEW_SUBMIT_CELL.php';
require_once __DIR__ . '/../src/Ksfraser/HTML/archived/class.VIEW_DIV.php';
require_once __DIR__ . '/../src/Ksfraser/HTML/archived/class.VIEW_FORM.php';
require_once __DIR__ . '/../src/Ksfraser/HTML/archived/class.VIEW_TABLE_TD.php';
require_once __DIR__ . '/../src/Ksfraser/HTML/archived/class.VIEW_TABLE_TH.php';
