<?php

namespace Ksfraser\HTML;

use Ksfraser\Origin\origin;

$path_to_faroot = dirname ( realpath ( __FILE__ ) ) . "/../../";
//global $path_to_root;
//require_once( $path_to_faroot . '/includes/db_pager.inc' );

/* **********************************************************
 * This is a FrontAccounting specific VIEW class
 *
/**
 * Class VIEW
 * This is a FrontAccounting specific VIEW class.
 *
 *
 * @package Ksfraser\HTML
 * @since v1.0.0 2025-04-23
 */
class VIEW extends origin
{
    protected $js;
    protected $page_mode;
    protected $header_row = array();
    protected $column_type = array();
    protected $db_column_name = array();
    protected $db_result;			//MYSQL Result pointer
    protected $use_date_picker;
    protected $db_table_pager; 		// = & new_db_pager( $this->table_name, $this->sql, $this->col_array );
    protected $table_width;
    protected $client;
    protected $model;
    protected $use_popup_window;	//!<bool
    public $help_context;
    protected $table_style;		//!<integer def TABLESTYLE

/**
	 * Function __construct
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $client
	 * @param mixed $use_popup_window
	 * @return void
 */
    function __construct($client = null, $use_popup_window = false)
    {
        $this->use_js();
        $this->set_var("page_mode", "simple");
        $this->set_var("use_date_picker", false);
        $this->set_var("use_popup_window", $use_popup_window);
        $this->set_var("table_width", "70%");
        $this->set("table_style", TABLESTYLE);

        if (isset($client)) {
            $this->set_var("client", $client);
        }
        if (isset($client->model)) {
            $this->model = $client->model;
        }

        $this->add_submenu();
    }

/**
	 * Function __destruct
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
    function __destruct()
    {
    }

/**
	 * Function Page
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
    function Page()
    {
        if (!isset($this->help_context)) {
            throw new Exception("Help Context not set. What happened?", KSF_FIELD_NOT_SET);
        }
        if (!isset($this->js)) {
            throw new Exception("JS not set. What happened?", KSF_FIELD_NOT_SET);
        }
        page(_($help_context = $this->help_context), false, false, "", $this->js);
    }

    /**
     * Add submenu items.
     *
     * @return void
     * @since v1.0.5 2026-04-14
     */
    function add_submenu()
/**
	 * Function add_submenu
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
    {
    }

    /**
     * Run the view with a specific action.
/**
	 * Function backtrace
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
    function run($action)
    {
        $this->new_page($action);
        $this->build_page($action);
        $this->end_page($action);
    }
/**
 * backtrace
 *
 * @since v1.0.0 2025-04-24
 * @return void
 */
    function backtrace()
    {
        echo "<br />";
        array_walk(debug_backtrace(),create_function('$a,$b','print "{$a[\'function\']}()(".basename($a[\'file\']).":{$a[\'line\']});<br /> ";'));
    }
/**
 * call_table
/**
	 * Function call_table
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $action
	 * @param mixed $msg
	 * @return void
 */
 *
 * @since v1.0.0 2025-04-24
 * @param mixed $action
 * @param mixed $msg
 * @return void
 */
    function call_table( $action, $msg )
    {
        //$this->notify( __METHOD__ . ":" . __LINE__ . " Entered " . __METHOD__, "WARN" );
                start_form(true);
                 start_table(TABLESTYLE2, "width=40%");
                 table_section_title( $msg );
/**
	 * Function display_error
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $error
	 * @return void
 */
                 hidden('action', $action );
                 end_table(1);
                 submit_center( $action, $msg );
                 end_form();
/**
	 * Function display_notification
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $msg
	 * @return void
 */
        //$this->notify( __METHOD__ . ":" . __LINE__ . " Exiting " . __METHOD__, "WARN" );
    }

/**
 * display_error
 *
 * @since v1.0.0 2025-04-24
/**
	 * Function notify
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $msg
	 * @param mixed $level
	 * @return void
 */
 * @param mixed $error
 * @return void
 */
    function display_error( $error )
    {
        display_error(_( $error ) );
    }
/**
	 * Function set_var
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $var
	 * @param mixed $value
	 * @return void
 */
/**
 * display_notification
 *
 * @since v1.0.0 2025-04-24
 * @param mixed $msg
 * @return void
 */
    function display_notification( $msg )
    {
        display_notification(_( $msg ) );
    }
    /**
     * Test-safe logger hook.
     *
     * In a full FrontAccounting environment this would integrate with the
/**
	 * Function set
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $field
	 * @param mixed $value
	 * @return void
 */
     * application logging/eventloop; for library tests it is a no-op.
 * @return void
 * @param mixed $msg
 * @param mixed $level
 * @since v2.0.1 2026-04-14
     */
    function notify( $msg = '', $level = 'DEBUG' )
    {
/**
	 * Function get
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $field
	 * @return void
 */
        return;
    }

    /**
     * Override set_var to allow arbitrary key/value storage for unit tests.
     *
     * Origin::set_var enforces native class vars; legacy VIEW usage often treats
     * it like a generic container.
/**
	 * Function set_focus
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $field
	 * @return void
 */
 * @return void
 * @param mixed $var
 * @param mixed $value
 * @since v2.0.1 2026-04-14
/**
	 * Function new_page
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $action
	 * @return void
 */
     */
    function set_var( $var, $value )
    {
        if( property_exists( $this, $var ) )
        {
            $parent = get_parent_class($this);
/**
	 * Function new_form
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
            if ($parent !== false && method_exists($parent, 'set_var')) {
                return parent::set_var( $var, $value );
            }
            // Parent does not provide set_var; store locally instead
            $this->$var = $value;
            return true;
        }
        $this->container_arr[$var] = $value;
        return true;
    }

/**
	 * Function new_table
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
    /**
     * Minimal `set` implementation for test environment compatibility.
 * @return void
 * @param mixed $field
/**
	 * Function table_header
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
 * @param mixed $value
 * @since v2.0.1 2026-04-14
     */
    function set( $field, $value )
    {
        if (property_exists($this, $field)) {
            $this->$field = $value;
            return true;
/**
	 * Function db_pager
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $model
	 * @return void
 */
        }
        $this->container_arr[$field] = $value;
        return true;
    }

    /**
     * Override get to fall back to container values.
 * @return void
/**
	 * Function db_result2rows
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
 * @param mixed $field
 * @since v2.0.1 2026-04-14
     */
    function get( $field )
    {
        if( is_array( $this->container_arr ) && array_key_exists( $field, $this->container_arr ) )
        {
            return $this->container_arr[$field];
        }
        return parent::get( $field );
    }
/**
 * set_focus
 *
 * @since v1.0.0 2025-04-24
 * @param mixed $field
 * @return void
 */
    function set_focus( $field )
    {	
        set_focus( $field );
    }
/**
 * new_page
 *
 * @since v1.0.0 2025-04-24
 * @param mixed $action
 * @return void
 */
    function new_page( $action )
    {
        if( $this->page_mode == "simple" )
        {
            simple_page_mode(true);
        }
    }
/**
 * new_form
 *
 * @since v1.0.0 2025-04-24
/**
	 * Function edit_table
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
 * @return void
 */
    function new_form()
    {
        start_form();
    }
    /*************************
    * Create a new Table
    *
    * Normally would do sanity check on variables but they are set in the constructor.
    *
 * @return void
 * @since v1.0.5 2026-04-14
/**
 * new_table
 *
 * @since v1.0.0 2025-04-24
 * @return void
 */
    function new_table()
    {
        start_table( $this->get( "table_style" ), "width=" . $this->get( "table_width" ) . "%");
    }
/**
 * table_header
 *
 * @since v1.0.0 2025-04-24
 * @return void
 */
    function table_header()
/**
	 * Function end_table
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
    {
        //$this->header_row = array(_("Asset Type"),_("Asset Name"),_("Serial Number"), _("Purchase Date"),
        //				_("Purchase Value"), _("Current Value"), "", "", _("A"));
        inactive_control_column($this->header_row);
/**
	 * Function end_form
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
        table_header($this->header_row);
    }
/**
 * db_pager
 *
/**
	 * Function end_page
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $action
	 * @return void
 */
 * @since v1.0.0 2025-04-24
 * @param mixed $model
 * @return void
/**
	 * Function use_js
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
 */
    function db_pager( $model )
    {
/*
		$table = & new_db_pager( $model->db_pager_tablename, $model->db_pager_sql, $model->db_pager_col_array );
		//$table = $this->db_table_pager;
		$table->width = $this->table_width;
		display_db_pager( $table );
*/
    }
/**
 * db_result2rows
 *
 * @since v1.0.0 2025-04-24
 * @return void
 */
    function db_result2rows()
    {
        if( isset( $this->db_result ) )
        {
/**
	 * Function build_page
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $action
	 * @return void
 */
            $k = 0;
            while ($myrow = db_fetch($result))
            {
			        alt_table_row_color($k);
				foreach( $this->header_row as $col )
				{
/**
	 * Function dropdown
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $label
	 * @param mixed $choices_array
	 * @return void
 */
					if( $this->col_type[$col] == "amount" )
					{
						amount_cell( $myrow[$col] );
					}
					else if( $this->col_type[$col] == "date" )
					{
						label_cell( DateService::sql2dateStatic( $myrow[$col] ) );
					}
					else if( $this->col_type[$col] == "edit" )
					{
			        		edit_button_cell("Edit" . $myrow['_id'], _("Edit"));
					}
					else if( $this->col_type[$col] == "delete" )
/**
	 * Function bool
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $row
	 * @param mixed $caller
	 * @return void
 */
					{
			        		delete_button_cell("Delete" . $myrow['_id'], _("Delete"));
					}
					else if( $this->col_type[$col] == "inactive" )
/**
	 * Function textrow
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $row
	 * @param mixed $caller
	 * @return void
 */
					{
			        		inactive_control_cell($myrow["_id"], $myrow["inactive"], 'assets', '_id');
					}
					else
/**
	 * Function number
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $row
	 * @param mixed $caller
	 * @return void
 */
					{
						label_cell( $myrow[$col] );
					}
				}
/**
	 * Function date
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $row
	 * @param mixed $caller
	 * @return void
 */
			        end_row();
            }

        }
    }
/**
 * edit_table
 *
 * @since v1.0.0 2025-04-24
 * @return void
 */
    function edit_table()
    {
        $this->start_table();
        //These take values out of $_POST
        foreach( $this->header_row as $col )
        {
            if( $this->col_type[$col] == "amount" )
            {
                amount_row( _($this->header_row[$col]), $this->db_column_name[$col], null, null, null, 2);
            }
            else if( $this->col_type[$col] == "date" )
            {
                date_row(_($this->header_row[$col]), $this->db_column_name[$col], '', null, 0, 0, 0, null, true);
            }
            else if( $this->col_type[$col] == "edit" )
            {
            }
/**
	 * Function master_form
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
            else if( $this->col_type[$col] == "delete" )
            {
            }
            else if( $this->col_type[$col] == "inactive" )
            {
            }
            else
            {
                text_row( _($this->header_row[$col]), $this->db_column_name[$col], null, 50, 50 );
            }
        }
        $this->end_table();
    }
/**
 * end_table
 *
 * @since v1.0.0 2025-04-24
 * @return void
 */
    function end_table()
    {
        end_table(1);
    }
/**
 * end_form
 *
 * @since v1.0.0 2025-04-24
 * @return void
 */
    function end_form()
    {
        end_form();
    }
/**
 * end_page
 *
 * @since v1.0.0 2025-04-24
 * @param mixed $action
 * @return void
 */
    function end_page( $action )
    {
        end_page();
    }
/**
 * use_js
 *
/**
	 * Function display_table_with_edit
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $sql
	 * @param mixed $headers
	 * @param mixed $index
	 * @param mixed $return_to
	 * @return void
 */
 * @since v1.0.0 2025-04-24
 * @return void
 */
    function use_js()
    {
        $this->js = "";
        if ($this->use_date_picker)
        		$this->js .= get_js_date_picker();
		if( $this->use_popup_window )
			$this->js .= get_js_open_window(900, 500);

		/*Mantis 212?  PAGE can't redeclare help_url
		 * Obviously Page has already been called
		//page(_($help_context = "FA-CRM"), false, false, "", $this->js);
		 */
		/*20200713 hitting the can't redeclare help_url() again...
		if( ! defined( "help_url" ) )
			page(_($help_context = "FA-KSF"), false, false, "", $this->js);
		 */


    }
/**
 * build_page
 *
 * @since v1.0.0 2025-04-24
 * @param mixed $action
 * @return void
 */
    function build_page( $action )
    {
        //need to take the form, tables etc for the page
        //and create them to be displayed
    }
/**
 * dropdown
 *
 * @since v1.0.0 2025-04-24
 * @param mixed $label
 * @param mixed $choices_array
 * @return void
 */
    function dropdown( $label, $choices_array )
    {
        /*
/**
	 * Function display_edit_form
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $form_def
	 * @param mixed $selected_id
	 * @param mixed $return_to
	 * @return void
 */
          //Compare Combo
        *               global $sel;
        *               $sel = array(_("Accumulated"), _("Period Y-1"), _("Budget"));
        *               echo "<td>"._("Compare to").":</td>\n";
        *               echo "<td>";
        *               echo array_selector('Compare', null, $sel);
        *               echo "</td>\n";
        */
        echo "<td>" . $label . ":</td>\n<td>" . array_selector( $name, null, $choices_array ) . "</td>\n";
    }
/**
 * bool
 *
 * @since v1.0.0 2025-04-24
 * @param mixed $row
 * @param mixed $caller
 * @return void
 */
    function bool( $row, $caller )
    {
        text_row($row['label'], $row['pref_name'], $caller->$row['pref_name'], 1, 1);
    }
/**
 * textrow
 *
 * @since v1.0.0 2025-04-24
 * @param mixed $row
 * @param mixed $caller
 * @return void
 */
    function textrow( $row, $caller )
    {
        text_row($row['label'], $row['pref_name'], $caller->$row['pref_name'], 20, 40);
    }
/**
 * number
 *
 * @since v1.0.0 2025-04-24
 * @param mixed $row
 * @param mixed $caller
 * @return void
 */
    function number( $row, $caller )
    {
        amount_row( _($row['label']), $row['pref_name'], null, null, null, 2);
    }
/**
 * date
 *
 * @since v1.0.0 2025-04-24
/**
	 * Function combo_list
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $sql
	 * @param mixed $order_by_field
	 * @param mixed $name
	 * @param mixed $selected_id
	 * @param mixed $none_option
	 * @param mixed $submit_on_change
	 * @return void
 */
 * @param mixed $row
 * @param mixed $caller
 * @return void
 */
    function date( $row, $caller )
    {
        //date_row($label, $name, $title=null, $check=null, $inc_days=0, $inc_months=0, $inc_years=0, $params=null, $submit_on_change=false)

        date_row(_($row['label']), $row['pref_name'], '', null, 0, 0, 0, "param", false);
    }
/*
                echo combo_input("order_no2", $this->order_no, $sql, 'supp_name', 'order_no',
                        array(
                                //'format' => '_format_add_curr',
/**
	 * Function combo_list_cells
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $sql
	 * @param mixed $order_by_field
	 * @param mixed $label
	 * @param mixed $name
	 * @param mixed $selected_id
	 * @param mixed $none_option
	 * @param mixed $submit_on_change
	 * @return void
 */
                                'order' => array('order_no'),
                                //'search_box' => $mode!=0,
                                'type' => 1,
                                //'search' => array("order_no","supp_name"),
                                //'spec_option' => $spec_option === true ? _("All Suppliers") : $spec_option,
                                'spec_id' => $all_items,
                                'select_submit'=> $submit_on_change,
/**
	 * Function combo_list_row
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $sql
	 * @param mixed $order_by_field
/**
	 * Function fields_array2entry
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $fields_array
	 * @return void
 */
	 * @param mixed $label
	 * @param mixed $name
	 * @param mixed $selected_id
	 * @param mixed $none_option
	 * @param mixed $submit_on_change
	 * @return void
 */
                                'async' => false,
                                //'sel_hint' => $mode ? _('Press Space tab to filter by name fragment') :
                                //_('Select supplier'),
                                //'show_inactive'=>$all
                        )
                );
 */
    /*********************************************************************************//**
     *master_form
     *	Display 2 forms - the summary of items with edit/delete
     *		The edit/entry form for 1 row of data
     *	assumes entry_array has been built (constructor)
     *	assumes table_details has been built (constructor)
     *	assumes selected_id has been set (constructor?)
     *	assumes iam has been set (constructor)
     *
 * @return void
 * @since v1.0.5 2026-04-14
     * ***********************************************************************************/
    function master_form()
    {
        global $Ajax;
        //var_dump( $_POST );
        //var_dump( $_GET );
        $this->notify( __METHOD__ . "::"  . __LINE__, "WARN" );
        //simple_page_mode();
        div_start('form');
        //$this->notify( __METHOD__ . "::"  . __LINE__ . " Mode: " . $Mode );
        $this->selected_id = find_submit('Edit');
        $count = $this->fields_array2var();
        $key = $this->table_details['primarykey'];
        if( isset( $this->$key ) )
        {
            $this->notify( __METHOD__ . ":" . " Key set.  Updating", "WARN" );
            $this->update_table();
        }
        else if( $count > 0 )
        {
            $this->notify( __METHOD__ . ":" . " Key NOT set.  Inserting", "WARN" );
            $this->insert_table();
        }
        $this->reset_values();
		
        $sql = "SELECT ";
        $rowcount = 0;
        foreach( $this->entry_array as $row )
        {
            if( $rowcount > 0 ) $sql .= ", ";
            $sql .= $row['name'];
            $rowcount++;
        }
        $sql .= " from " . $this->table_details['tablename'];
        if( isset( $this->table_details['orderby'] ) )
            $sql .= " ORDER BY " . $this->table_details['orderby'];
	
        $this->notify( __METHOD__ . ":" . __LINE__ . ":" . $sql, "WARN" );
        $this->notify( __METHOD__ . ":" . __LINE__ . ":" . " Display data", "WARN" );
        $this->display_table_with_edit( $sql, $this->entry_array, $this->table_details['primarykey'] );
        $this->display_edit_form( $this->entry_array, $this->selected_id, "create_" . $this->iam . "_form" );
        div_end();
        //$Ajax->activate('form');
    }
    /**
     * Display a table with edit and delete options.
     *
 * @param mixed $sql
 * @param mixed $headers
 * @param mixed $index
 * @param mixed $return_to
 * @return void
 * @since v2.0.1 2026-04-14
     */
    function display_table_with_edit($sql, $headers, $index, $return_to = null)
    {
        $this->notify( __METHOD__ . "::"  . __LINE__, "DEBUG" );
        $columncount = 0;
        foreach( $headers as $row )
        {
            $th[$columncount] = $row['label'];
            $datacol[$columncount] = $row['name'];
            $columncount++;
        }
        //Edit
            $th[$columncount] = "";
            $columncount++;
        //Delete
            $th[$columncount] = "";
            $columncount++;

        // Legacy UI rendering (FrontAccounting helpers) was historically done here.
        // Keep this method syntactically valid even when those helpers are unavailable.
        // start_form(false, false, "woo_form_handler.php", "");
        // start_table(TABLESTYLE, "width=80%");
        table_header( $th );
        $k=0;

        $stmt = db_prepare($sql); // Prepare the SQL statement
        db_execute($stmt); // Execute the prepared statement
        while( $nextrow = db_fetch( $stmt ) ) // Fetch results using the prepared statement
        {
            alt_table_row_color($k);
            for( $c = 0; $c <= $columncount - 3; $c++ )
            {
                label_cell( $nextrow[$c] );
            }
            edit_button_cell("Edit" . $nextrow[$index], _("Edit") );
            // delete button (legacy)
            // delete_button_cell("Delete" . $nextrow[$index], _("Delete"));
            end_row();
        }
//inactive_control_row($th);
        hidden( 'table_with_edit', 1 );
        if( null != $return_to )
            hidden( 'return_to', $return_to );
        end_table();
        end_form();
    }

    /**
     * Display an edit form for a specific row.
     *
 * @param mixed $form_def
 * @param mixed $selected_id
 * @param mixed $return_to
 * @return void
 * @since v2.0.1 2026-04-14
     */
    function display_edit_form($form_def, $selected_id = -1, $return_to)
    {
        $this->notify( __METHOD__ . "::"  . __LINE__, "DEBUG" );
        if( $selected_id > -1 )
        {
            //We are editing a row, so need to query for the values
            $sql = "SELECT * from " . $this->table_details['tablename'] . " WHERE " . $this->table_details['primarykey'] . " = ?";
            $stmt = db_prepare($sql); // Prepare the SQL statement
            db_bind_param($stmt, 1, $selected_id); // Bind the parameter
            db_execute($stmt); // Execute the prepared statement
            $arr = db_fetch_assoc( $stmt ); // Fetch results using the prepared statement
            $this->array2var( $arr );
        }
        start_form(  );
//start_form(  false, false, "woo_form_handler.php", "" );
        start_table(TABLESTYLE2 );
        foreach( $form_def as $row )
        {
            $var = $row['name'];
            if( $row['readwrite'] == "read" )
            {
                //can't edit this column as it isn't set write nor readwrite
                if( isset( $this->$var ) )
                    label_row( _($row['label'] . ":"), $this->$var );
            }
            else
            {
                if( $row['type'] == "varchar" )
                    text_row(_($row['label'] . ":"), $row['name'], $this->$var, $row['size'], $row['size']);
                else if( $row['type'] == "bool" )
                    check_row(_($row['label'] . ":"), $row['name'] ); 
                else
                    text_row(_($row['label'] . ":"), $row['name'], null, $row['size'], $row['size']);
            }
        }


        end_table();
        hidden( 'edit_form', 1 );
        hidden( 'my_class', get_class( $this ) );
        hidden( 'return_to', $return_to );
        hidden( 'action', $return_to );
        submit_center('ADD_ITEM', _("Add Item") );
//		submit_add_or_update_center($selected_id == -1, '', 'both', false);
        end_form();
        if( $this->debug >= 3 ) $this->backtrace();
    }
/**
 * combo_list
 *
 * @since v1.0.0 2025-04-24
 * @param mixed $sql
 * @param mixed $order_by_field
 * @param mixed $name
 * @param mixed $selected_id
 * @param mixed $none_option
 * @param mixed $submit_on_change
 * @return void
 */
    function combo_list( $sql, $order_by_field, $name, $selected_id=null, $none_option=false, $submit_on_change=false)
    {
        global $path_to_root;
        include_once( $path_to_root . "/includes/ui/ui_lists.inc" );
        return combo_input($name, $selected_id, $sql, $order_by_field,  'name',
        array(
            'order' => $order_by_field,
            'spec_option' => $none_option,
            'spec_id' => ALL_NUMERIC,
            'select_submit'=> $submit_on_change,
            'async' => false,
        ) );
    }
/**
 * combo_list_cells
 *
 * @since v1.0.0 2025-04-24
 * @param mixed $sql
 * @param mixed $order_by_field
 * @param mixed $label
 * @param mixed $name
 * @param mixed $selected_id
 * @param mixed $none_option
 * @param mixed $submit_on_change
 * @return void
 */
    function combo_list_cells( $sql, $order_by_field, $label, $name, $selected_id = null, $none_option=false, $submit_on_change=false )
    {
        echo "<td>$label</td>";
        echo "<td>";
        $this->combo_list( $sql, $order_by_field, $name, $selected_id, $none_option, $submit_on_change);
        echo "</td>";
    }
/**
 * combo_list_row
 *
 * @since v1.0.0 2025-04-24
 * @param mixed $sql
 * @param mixed $order_by_field
 * @param mixed $label
 * @param mixed $name
 * @param mixed $selected_id
 * @param mixed $none_option
 * @param mixed $submit_on_change
 * @return void
 */
    function combo_list_row( $sql, $order_by_field, $label, $name, $selected_id = null, $none_option=false, $submit_on_change=false )
    {
        echo "<tr><td class='label'>$label</td>";
        $this->combo_list_cells( $sql, $order_by_field, $label, $name, $selected_id, $none_option, $submit_on_change);
        echo "</tr>";
    }
    /*@array@*/function fields_array2entry( $fields_array )
    {
        //Take a fields_array definition and conver to the array needed
        //to create edit forms for display_table_with_edit and display_edit_form
        $entry_array = array();
        $count = 0;
        foreach( $fields_array as $row )
        {
            $entry_array[$count]['column'] = $row['name'];
            if( !isset( $row['foreign_obj'] ) )
            {
                $open = strpos($row['type'], "(");
                if( false !== $open )
                {
                    $type = strstr( $row['type'], 0, $open );
                    $close = strpos( $row['type'], ")" );
                    $num = strstr( $row['type'], $open, $close );
                    $entry_array[$count]['type'] = $type;
                    $entry_array[$count]['size'] = $num;
                }
                else
                {
                    $entry_array[$count]['type'] = $row['type'];
                }
            }
            else
            {
                //It is an index into another table.  Should be a drop down in edit form
                $entry_array[$count]['type'] = "dropdown";
                $entry_array[$count]['size'] = "11";
                $entry_array[$count]['foreign_obj'] = $row['foreign_obj'];
                if( isset( $row['foreign_column'] ) )
                    $entry_array[$count]['foreign_column']= $row['foreign_column'];
                else
                    $entry_array[$count]['foreign_column']= $row['name'];
                //Ensure that foreign_object_array contains the table too...
            }
				$entry_array[$count]['name'] =	$row['name'];
            if( isset( $row['label'] ) )
                $entry_array[$count]['label'] =	$row['label'];
            else
            if( isset( $row['comment'] ) )
                $entry_array[$count]['label'] =	$row['comment'];
            else
                $entry_array[$count]['label'] =	$row['name'];
            if( isset( $row['readwrite'] ) )
                $entry_array[$count]['readwrite'] = $row['readwrite'];
            else
                $entry_array[$count]['readwrite'] = "readwrite";	//ASSUMING no restriction...
            $count++;
        }
        return $entry_array;
    }

}
