<?php

namespace Ksfraser\HTML\Composites;

use Ksfraser\HTML\Elements\HtmlTableRow;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * HTML_ROW - Wrapper for HtmlTableRow
 *
 * Provides backward compatibility with legacy code.
 * This is a simple wrapper that delegates to HtmlTableRow.
 *
 *             New code should use HtmlTableRow directly.
 *
 *
 * @deprecated This class exists for backward compatibility only.
 * @see \Ksfraser\HTML\HtmlTableRow
 * @package Ksfraser\HTML
 * @since 1.0.1 2026-02-16
 */
class HTML_ROW implements HtmlElementInterface
{
	/**
	 * The underlying HtmlTableRow instance
	 * @var HtmlTableRow
	 */
	protected $row;
	
	/**
	 * Constructor
	 * 
 * @param mixed $data
 * @return void
 * @since 1.0.1 2026-02-16
 */
function __construct( $data )
	{
		$content = is_string($data) ? new HtmlString($data) : $data;
		$this->row = new HtmlTableRow( $content );
	}
	
	/**
	 * Render the row to HTML output
	 * 
	 * @return void
 * @since v1.0.0 2026-04-13
	 */
	function toHTML(): void
	{
		$this->row->toHtml();
	}
	
	/**
	 * Get the HTML string representation
	 * 
	 * @return string The HTML
 * @since v1.0.0 2026-04-13
	 */
	public function getHtml(): string
	{
		return $this->row->getHtml();
	}
}

