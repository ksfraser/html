<?php

namespace Ksfraser\HTML\Composites;

use Ksfraser\HTML\Elements\HtmlTableRow;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * HTML_ROW - Wrapper for HtmlTableRow

 *

 * 

 * Provides backward compatibility with legacy code.

 * This is a simple wrapper that delegates to HtmlTableRow.

 * 

 *             New code should use HtmlTableRow directly.

 * 

 * 

 *

 * @deprecated This class exists for backward compatibility only.

 * @since 1.0.1 2026-02-16

 * @see \Ksfraser\HTML\HtmlTableRow

 * @package Ksfraser\HTML

 */
class HTML_ROW implements HtmlElementInterface
{
	/**
	 * The underlying HtmlTableRow instance
	 *
	 * @var HtmlTableRow
	 */
	protected $row;
	
/**
	
 * __construct()
	
 *
	
 * @since v1.0.0 2026-04-14
	
 * @param mixed $data
	
 * @return void
	
 */
function __construct( $data )
	{
		$content = is_string($data) ? new HtmlString($data) : $data;
		$this->row = new HtmlTableRow( $content );
	}
	
/**
	
 * toHTML()
	
 *
	
 * @since v1.0.0 2026-04-14
	
 * @return void
	
 */
	function toHTML(): void
	{
		$this->row->toHtml();
	}
	
	/**
	
	 * Get the HTML string representation
	
	 *
	
	 * @since v1.0.0 2026-04-13
	
	 * @return string The HTML
	
	 */
	public function getHtml(): string
	{
		return $this->row->getHtml();
	}
}

