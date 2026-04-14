<?php

namespace Ksfraser\HTML\Composites;

use Ksfraser\HTML\Composites\HtmlLabelRow;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * HTML_ROW_LABEL - Wrapper for HtmlLabelRow

 *

 * 

 * Provides backward compatibility with legacy code.

 * This wrapper matches the old interface exactly but delegates to HtmlLabelRow.

 * 

 * The old interface had parameter order: ($data, $label, $width, $class)

 * HtmlLabelRow uses: ($label, $content) with fluent methods

 * 

 *             New code should use HtmlLabelRow directly.

 * 

 * 

 *

 * @deprecated This class exists for backward compatibility only.

 * @since 1.0.1 2026-02-16

 * @see \Ksfraser\HTML\HtmlLabelRow

 * @package Ksfraser\HTML

 */
class HTML_ROW_LABEL implements HtmlElementInterface
{
    /**
     * The underlying HtmlLabelRow instance
     *
     * @var HtmlLabelRow
     */
    protected $row;
    
    /**
    
     * Create a table row with a label
    
     *
    
     * 
    
     * NOTE: Parameter order matches legacy interface for backward compatibility
    
     * 
    
     *
    
     * @since 1.0.1 2026-02-16
    
     * @param mixed $data
    
     * @param string $label
    
     * @param ?int $width
    
     * @param ?string $class
    
     * @return void
    
     */
public function __construct($data, string $label, ?int $width = null, ?string $class = null)
    {
        // Convert string data to HtmlString if needed
        $content = is_string($data) ? new HtmlString($data) : $data;
        $labelElement = new HtmlString($label);
        
        // Create HtmlLabelRow with correct parameter order (label first, then content)
        $this->row = new HtmlLabelRow($labelElement, $content);
        
        // Apply the width and class using fluent interface, handling null values
        $actualWidth = $width ?? 25;
        $actualClass = $class ?? 'label';
        
        $this->row->setLabelWidth($actualWidth)->setLabelClass($actualClass);
    }
    
    /**
    
     * Render the row to HTML output
    
     *
    
     * 
    
     * This method satisfies the HtmlElementInterface requirement.
    
     * 
    
     * NOTE: PHP method names are case-insensitive, so legacy code calling
    
     * toHTML() (with capital HTML) will automatically call this method.
    
     * This maintains backward compatibility without needing two methods.
    
     * 
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return void
    
     */
    public function toHtml(): void
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


