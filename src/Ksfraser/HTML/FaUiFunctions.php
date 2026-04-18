<?php

namespace Ksfraser\HTML;

if (!defined('FA_ROOT')) {
    define('FA_ROOT', realpath(__DIR__ . '/../../../..'));
}

// Load FA UI functions in global namespace
require_once(FA_ROOT . "/includes/ui/ui_input.inc");
require_once(FA_ROOT . "/includes/ui/ui_lists.inc");
require_once(FA_ROOT . "/includes/ui/ui_controls.inc");

/**

 * Facade for Front Accounting UI functions

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * This allows us to decouple our HTML components from FA's UI functions

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *

 * @since 1.0.1 2026-02-16

 * @return void

 */
/**
 * FaUiFunctions
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class FaUiFunctions {
    const TABLESTYLE2 = 2; // Matching FA's constant

/**

 * label_row

 *

 * @since v1.0.0 2026-04-13

 * @param mixed $label

 * @param mixed $content

 * @param mixed $params

 * @return void

 */
    public static /**
 * label_row
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @param mixed $params
 * @return void
 */
function label_row($label, $content, $params="")
    {
        // Check for function in global namespace
        if (function_exists('\\label_row')) {
            call_user_func('\\label_row', $label, $content, $params);
        } else {
            echo "<tr><td class='label'>$label</td><td $params>$content</td></tr>";
        }
    }

/**

 * start_table

 *

 * @since 1.0.1 2026-02-16

 * @param mixed $type

 * @param mixed $params

 * @return void

 */
    public static /**
 * start_table
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $type
 * @param mixed $params
 * @return void
 */
function start_table($type = self::TABLESTYLE2, $params="")
    {
        if (function_exists('\\start_table')) {
            call_user_func('\\start_table', $type, $params);
        } else {
            echo "<table class='tablestyle$type' $params>\n";
        }
    }

/**

 * end_table

 *

 * @since 1.0.1 2026-02-16

 * @param mixed $breaks

 * @return void

 */
    public static /**
 * end_table
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breaks
 * @return void
 */
function end_table($breaks=0)
    {
        if (function_exists('\\end_table')) {
            call_user_func('\\end_table', $breaks);
        } else {
            echo "</table>\n";
        }
    }

/**

 * table_header

 *

 * @since 1.0.1 2026-02-16

 * @param mixed $labels

 * @param mixed $params

 * @return void

 */
    public static /**
 * table_header
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $labels
 * @param mixed $params
 * @return void
 */
function table_header($labels, $params='')
    {
        if (function_exists('\\table_header')) {
            call_user_func('\\table_header', $labels, $params);
        } else {
            echo "<tr>";
            foreach ($labels as $label) {
                echo "<th $params>$label</th>";
            }
            echo "</tr>\n";
        }
    }

/**

 * start_row

 *

 * @since 1.0.1 2026-02-16

 * @param mixed $param

 * @return void

 */
    public static /**
 * start_row
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $param
 * @return void
 */
function start_row($param="")
    {
        if (function_exists('\\start_row')) {
            call_user_func('\\start_row', $param);
        } else {
            echo "<tr $param>\n";
        }
    }

/**

 * end_row

 *

 * @since 1.0.1 2026-02-16

 * @return void

 */
    public static /**
 * end_row
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function end_row()
    {
        if (function_exists('\\end_row')) {
            call_user_func('\\end_row');
        } else {
            echo "</tr>\n";
        }
    }

/**

 * label_cells

 *

 * @since 1.0.1 2026-02-16

 * @param mixed $label

 * @param mixed $value

 * @param mixed $params

 * @param mixed $params2

 * @param mixed $id

 * @return void

 */
    public static /**
 * label_cells
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $value
 * @param mixed $params
 * @param mixed $params2
 * @param mixed $id
 * @return void
 */
function label_cells($label, $value, $params="", $params2="", $id=null)
    {
        if (function_exists('\\label_cells')) {
            call_user_func('\\label_cells', $label, $value, $params, $params2, $id);
        } else {
            // OOP implementation
            if ($label != null) {
                $labelCell = new \Ksfraser\HTML\Elements\FaCell($label, $params);
                $labelCell->toHtml();
            }
            
            // Handle Ajax updates if $id is set (simplified for now)
            $valueParams = $params2;
            if (isset($id)) {
                $valueParams .= " id='$id'";
            }
            
            $valueCell = new \Ksfraser\HTML\Elements\FaCell($value, $valueParams);
            $valueCell->toHtml();
        }
    }

/**

 * label_cell

 *

 * @since 1.0.1 2026-02-16

 * @param mixed $label

 * @param mixed $params

 * @param mixed $id

 * @return void

 */
    public static /**
 * label_cell
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $params
 * @param mixed $id
 * @return void
 */
function label_cell($label, $params="", $id=null)
    {
        if (function_exists('\\label_cell')) {
            call_user_func('\\label_cell', $label, $params, $id);
        } else {
            // OOP implementation
            $cellParams = $params;
            if (isset($id)) {
                $cellParams .= " id='$id'";
                // TODO: Add Ajax update functionality
            }
            $cell = new \Ksfraser\HTML\Elements\FaCell($label, $cellParams);
            $cell->toHtml();
        }
    }

/**

 * number_list_cells

 *

 * @since 1.0.1 2026-02-16

 * @param mixed $label

 * @param mixed $name

 * @param mixed $selected

 * @param mixed $from

 * @param mixed $to

 * @param mixed $no_option

 * @return void

 */
    public static /**
 * number_list_cells
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $name
 * @param mixed $selected
 * @param mixed $from
 * @param mixed $to
 * @param mixed $no_option
 * @return void
 */
function number_list_cells($label, $name, $selected, $from, $to, $no_option=false)
    {
        if (function_exists('\\number_list_cells')) {
            call_user_func('\\number_list_cells', $label, $name, $selected, $from, $to, $no_option);
        } else {
            // OOP implementation
            if ($label != null) {
                self::label_cell($label);
            }
            // Get the number list HTML
            $numberListHtml = '';
            if (function_exists('\\number_list')) {
                $numberListHtml = call_user_func('\\number_list', $name, $selected, $from, $to, $no_option);
            } else {
                // Fallback: simple select
                $numberListHtml = "<select name='$name'>";
                if ($no_option) {
                    $numberListHtml .= "<option value=''>--</option>";
                }
                for ($i = $from; $i <= $to; $i++) {
                    $selectedAttr = ($selected == $i) ? ' selected' : '';
                    $numberListHtml .= "<option value='$i'$selectedAttr>$i</option>";
                }
                $numberListHtml .= "</select>";
            }
            $cell = new \Ksfraser\HTML\Elements\FaCell($numberListHtml);
            $cell->toHtml();
        }
    }

/**

 * check_cells

 *

 * @since 1.0.1 2026-02-16

 * @param mixed $label

 * @param mixed $name

 * @param mixed $value

 * @param mixed $submit_on_change

 * @param mixed $title

 * @param mixed $params

 * @return void

 */
    public static /**
 * check_cells
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $name
 * @param mixed $value
 * @param mixed $submit_on_change
 * @param mixed $title
 * @param mixed $params
 * @return void
 */
function check_cells($label, $name, $value=null, $submit_on_change=false, $title=false, $params='')
    {
        if (function_exists('\\check_cells')) {
            call_user_func('\\check_cells', $label, $name, $value, $submit_on_change, $title, $params);
        } else {
            // OOP implementation
            if ($label != null) {
                self::label_cell($label);
            }
            // Get the check HTML
            $checkHtml = '';
            if (function_exists('\\check')) {
                $checkHtml = call_user_func('\\check', null, $name, $value, $submit_on_change, $title);
            } else {
                // Fallback: simple checkbox
                $checked = $value ? ' checked' : '';
                $checkHtml = "<input type='checkbox' name='$name'$checked>";
            }
            $cell = new \Ksfraser\HTML\Elements\FaCell($checkHtml, $params);
            $cell->toHtml();
        }
    }

/**

 * submit_cells

 *

 * @since 1.0.1 2026-02-16

 * @param mixed $name

 * @param mixed $value

 * @param mixed $extra

 * @param mixed $title

 * @param mixed $async

 * @return void

 */
    public static /**
 * submit_cells
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @param mixed $extra
 * @param mixed $title
 * @param mixed $async
 * @return void
 */
function submit_cells($name, $value, $extra="", $title=false, $async=false)
    {
        if (function_exists('\\submit_cells')) {
            call_user_func('\\submit_cells', $name, $value, $extra, $title, $async);
        } else {
            // OOP implementation
            // Get the submit HTML
            $submitHtml = '';
            if (function_exists('\\submit')) {
                ob_start();
                call_user_func('\\submit', $name, $value, true, $title, $async);
                $submitHtml = ob_get_clean();
            } else {
                // Fallback: simple button
                $submitHtml = "<input type='submit' name='$name' value='$value'>";
            }
            $cell = new \Ksfraser\HTML\Elements\FaCell($submitHtml, $extra);
            $cell->toHtml();
        }
    }

/**

 * text_cells

 *

 * @since 1.0.1 2026-02-16

 * @param mixed $label

 * @param mixed $name

 * @param mixed $value

 * @param mixed $size

 * @param mixed $max

 * @param mixed $title

 * @param mixed $labparams

 * @param mixed $post_label

 * @param mixed $inparams

 * @return void

 */
    public static /**
 * text_cells
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $name
 * @param mixed $value
 * @param mixed $size
 * @param mixed $max
 * @param mixed $title
 * @param mixed $labparams
 * @param mixed $post_label
 * @param mixed $inparams
 * @return void
 */
function text_cells($label, $name, $value=null, $size="", $max="", $title=false, $labparams="", $post_label="", $inparams="")
    {
        if (function_exists('\\text_cells')) {
            call_user_func('\\text_cells', $label, $name, $value, $size, $max, $title, $labparams, $post_label, $inparams);
        } else {
            // OOP implementation
            if (function_exists('\\default_focus')) {
                call_user_func('\\default_focus', $name);
            }
            if ($label != null) {
                self::label_cell($label, $labparams);
            }
            // Get the text input HTML
            $textHtml = '';
            if (function_exists('\\text_input')) {
                $textHtml = call_user_func('\\text_input', $name, $value, $size, $max, $title, $inparams);
            } else {
                // Fallback: simple input
                $textHtml = "<input type='text' name='$name' value='$value' size='$size' maxlength='$max'>";
            }
            if ($post_label != "") {
                $textHtml .= " " . $post_label;
            }
            $cell = new \Ksfraser\HTML\Elements\FaCell($textHtml);
            $cell->toHtml();
            
            // Add Ajax update functionality
            if (isset($GLOBALS['Ajax'])) {
                $GLOBALS['Ajax']->addUpdate($name, $name, $value);
            }
        }
    }

/**

 * file_cells

 *

 * @since 1.0.1 2026-02-16

 * @param mixed $label

 * @param mixed $name

 * @param mixed $id

 * @return void

 */
    public static /**
 * file_cells
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $name
 * @param mixed $id
 * @return void
 */
function file_cells($label, $name, $id="")
    {
        if (function_exists('\\file_cells')) {
            call_user_func('\\file_cells', $label, $name, $id);
        } else {
            // OOP implementation
            $fileHtml = "<input type='file' name='$name'";
            if ($id != "") {
                $fileHtml .= " id='$id'";
            }
            $fileHtml .= ">";
            self::label_cells($label, $fileHtml);
        }
    }

/**

 * amount_cells_ex

 *

 * @since 1.0.1 2026-02-16

 * @param mixed $label

 * @param mixed $name

 * @param mixed $size

 * @param mixed $max

 * @param mixed $init

 * @param mixed $params

 * @param mixed $post_label

 * @param mixed $dec

 * @return void

 */
    public static /**
 * amount_cells_ex
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $name
 * @param mixed $size
 * @param mixed $max
 * @param mixed $init
 * @param mixed $params
 * @param mixed $post_label
 * @param mixed $dec
 * @return void
 */
function amount_cells_ex($label, $name, $size, $max=null, $init=null, $params=null, $post_label=null, $dec=null)
    {
        if (function_exists('\\amount_cells_ex')) {
            call_user_func('\\amount_cells_ex', $label, $name, $size, $max, $init, $params, $post_label, $dec);
        } else {
            // OOP implementation
            if (!isset($dec)) {
                if (function_exists('\\user_price_dec')) {
                    $dec = call_user_func('\\user_price_dec');
                } else {
                    $dec = 2; // fallback
                }
            }
            if (!isset($_POST[$name]) || $_POST[$name] == "") {
                if ($init !== null) {
                    $_POST[$name] = $init;
                } else {
                    $_POST[$name] = '';
                }
            }
            if ($label != null) {
                if ($params == null) {
                    $params = "class='label'";
                }
                self::label_cell($label, $params);
            }
            if (!isset($max)) {
                $max = $size;
            }
            $inputHtml = "<input class='amount' type='text' name='$name' size='$size' maxlength='$max' dec='$dec' value='" . $_POST[$name] . "'>";
            if ($post_label) {
                $inputHtml .= "<span id='_{$name}_label'> $post_label</span>";
            }
            $cellParams = ($label != null) ? "" : "align='right'";
            $cell = new \Ksfraser\HTML\Elements\FaCell($inputHtml, $cellParams);
            $cell->toHtml();
            
            // Add Ajax update functionality
            if (isset($GLOBALS['Ajax'])) {
                if ($post_label) {
                    $GLOBALS['Ajax']->addUpdate($name, '_'.$name.'_label', $post_label);
                }
                $GLOBALS['Ajax']->addUpdate($name, $name, $_POST[$name]);
                $GLOBALS['Ajax']->addAssign($name, $name, 'dec', $dec);
            }
        }
    }

/**

 * amount_cells

 *

 * @since 1.0.1 2026-02-16

 * @param mixed $label

 * @param mixed $name

 * @param mixed $init

 * @param mixed $params

 * @param mixed $post_label

 * @param mixed $dec

 * @return void

 */
    public static /**
 * amount_cells
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $name
 * @param mixed $init
 * @param mixed $params
 * @param mixed $post_label
 * @param mixed $dec
 * @return void
 */
function amount_cells($label, $name, $init=null, $params=null, $post_label=null, $dec=null)
    {
        self::amount_cells_ex($label, $name, 15, 15, $init, $params, $post_label, $dec);
    }

/**

 * unit_amount_cells

 *

 * @since 1.0.1 2026-02-16

 * @param mixed $label

 * @param mixed $name

 * @param mixed $init

 * @param mixed $params

 * @param mixed $post_label

 * @param mixed $dec

 * @return void

 */
    public static /**
 * unit_amount_cells
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $name
 * @param mixed $init
 * @param mixed $params
 * @pa