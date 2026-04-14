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
// Ensure legacy origin stub is available for old VIEW classes
require_once __DIR__ . '/stubs/class.origin.php';

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

// -------------------------------------------------------------------------
// Minimal FrontAccounting stubs so legacy VIEW code is executable in tests.
// -------------------------------------------------------------------------

if (!defined('TABLESTYLE')) {
    define('TABLESTYLE', 0);
}
if (!defined('TABLESTYLE2')) {
    define('TABLESTYLE2', 0);
}
if (!defined('KSF_FIELD_NOT_SET')) {
    define('KSF_FIELD_NOT_SET', 0);
}

if (!function_exists('_')) {
/**
	 * _()
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $s
	 * @return void
 */
    function _($s) { return $s; }
}

foreach ([
    'page',
    'start_form',
    'end_form',
    'start_table',
    'end_table',
    'table_header',
    'table_section_title',
    'inactive_control_column',
    'inactive_control_row',
    'inactive_control_cell',
    'alt_table_row_color',
    'label_cell',
    'label_row',
    'end_row',
    'hidden',
    'submit_center',
    'simple_page_mode',
    'get_js_date_picker',
    'get_js_open_window',
    'display_error',
    'display_notification',
    'set_focus',
    'text_row',
    'amount_row',
    'date_row',
    'check_row',
    'div_start',
    'div_end',
    'edit_button_cell',
    'delete_button_cell',
    'array_selector',
] as $fn) {
    if (!function_exists($fn)) {
        eval('function ' . $fn . '(...$args) { return null; }');
    }
}

// Minimal DB API stubs used by VIEW::display_table_with_edit()
if (!function_exists('db_prepare')) {
/**
	 * db_prepare()
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $sql
	 * @return void
 */
    function db_prepare($sql) { return ['sql' => $sql]; }
}
if (!function_exists('db_execute')) {
/**
	 * db_execute()
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $stmt
	 * @return void
 */
    function db_execute($stmt) { return true; }
}
if (!function_exists('db_fetch')) {
/**
	 * db_fetch()
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $stmt
	 * @return void
 */
    function db_fetch($stmt) { return false; }
}
if (!function_exists('db_fetch_assoc')) {
/**
	 * db_fetch_assoc()
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $stmt
	 * @return void
 */
    function db_fetch_assoc($stmt) { return false; }
}
if (!function_exists('db_bind_param')) {
/**
	 * db_bind_param()
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $stmt
	 * @param mixed $position
	 * @param mixed $value
	 * @return void
 */
    function db_bind_param($stmt, $position, $value) { return true; }
}

// -------------------------------------------------------------------------
// Legacy tests expect global VIEW_* class names; source is namespaced.
// Create global aliases.
// -------------------------------------------------------------------------

$aliases = [
    'VIEW' => 'Ksfraser\\HTML\\VIEW',
    'VIEW_TABLE' => 'Ksfraser\\HTML\\VIEW_TABLE',
    'VIEW_ROW' => 'Ksfraser\\HTML\\VIEW_ROW',
    'VIEW_CELL' => 'Ksfraser\\HTML\\VIEW_CELL',
    'VIEW_AMOUNT_CELL' => 'Ksfraser\\HTML\\VIEW_AMOUNT_CELL',
    'VIEW_DATE_CELL' => 'Ksfraser\\HTML\\VIEW_DATE_CELL',
    'VIEW_SUBMIT_CELL' => 'Ksfraser\\HTML\\VIEW_SUBMIT_CELL',
    'VIEW_DIV' => 'Ksfraser\\HTML\\VIEW_DIV',
    'VIEW_FORM' => 'Ksfraser\\HTML\\VIEW_FORM',
    'VIEW_TABLE_TD' => 'Ksfraser\\HTML\\VIEW_TABLE_TD',
    'VIEW_TABLE_TH' => 'Ksfraser\\HTML\\VIEW_TABLE_TH',
    'HtmlDf' => 'Ksfraser\\HTML\\Elements\\HtmlDf',
];

foreach ($aliases as $global => $fqcn) {
    if (!class_exists($global, false) && class_exists($fqcn)) {
        class_alias($fqcn, $global);
    }
}

// Back-compat: map moved element classes under Elements\ to Button\ or top-level namespaces
spl_autoload_register(function ($class) {
    $prefix = 'Ksfraser\\HTML\\Elements\\';
    if (str_starts_with($class, $prefix)) {
        $short = substr($class, strlen($prefix));
        $alt1 = 'Ksfraser\\HTML\\Button\\' . $short;
        $alt2 = 'Ksfraser\\HTML\\' . $short;
        if (class_exists($alt1)) {
            class_alias($alt1, $class);
            return true;
        }
        if (class_exists($alt2)) {
            class_alias($alt2, $class);
            return true;
        }
    }
    return false;
});
