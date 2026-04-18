<?php

namespace Ksfraser\HTML\Composites;

use Ksfraser\HTML\Elements\HtmlTableRow;
use Ksfraser\HTML\Elements\HtmlTd;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttribute;

/**

 * HTML Label Row Class

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

 * Represents a table row with two cells: a label cell and a content cell.

 * 

 * 

 * 

 * Commonly used in forms to display field labels alongside their values.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Structure: <tr><td class="label" width="25%">Label:</td><td>Content</td></tr>

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Uses proper composition with HtmlTd instead of hardcoding HTML.

 * 

 * 

 * 

 * This follows the Composite pattern - each component recursively renders itself.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Design Patterns:

 * 

 * 

 * 

 * - **Composite Pattern**: Composes HtmlTd cells that recursively render

 * 

 * 

 * 

 * - **Builder Pattern**: Fluent interface for setting attributes

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * SOLID Principles:

 * 

 * 

 * 

 * - Single Responsibility: Renders label/content row pairs only

 * 

 * 

 * 

 * - Open/Closed: Can be extended for custom row types

 * 

 * 

 * 

 * - Liskov Substitution: Implements HtmlElementInterface

 * 

 * 

 * 

 * - Interface Segregation: Uses HtmlElementInterface appropriately

 * 

 * 

 * 

 * - Dependency Inversion: Depends on HtmlElementInterface abstraction

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

 * ```php

 * 

 * 

 * 

 * $label = new HtmlString('Username:');

 * 

 * 

 * 

 * $content = new HtmlString('jdoe');

 * 

 * 

 * 

 * $row = new HtmlLabelRow($label, $content);

 * 

 * 

 * 

 * $row->setLabelWidth(30)->setLabelClass('form-label');

 * 

 * 

 * 

 * echo $row->getHtml();

 * 

 * 

 * 

 * // Output: <tr><td class="form-label" width="30%">Username:</td><td>jdoe</td></tr>

 * 

 * 

 * 

 * ```

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

 * @since v1.0.0 2025-10-31

 * @package Ksfraser\HTML

 * @author Kevin Fraser

 * @version 20251019.1

 * @example 

 * @return void

 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlLabelRow
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlLabelRow implements HtmlElementInterface
{
    /**
     * The label cell (left)
     *
     * @var HtmlTd
     * @return void
     */
    protected $labelCell;

    /**

     * The content cell (right)

     *

     * @var HtmlTd

     * @return void

     */
    protected $contentCell;

    /**

     * Constructor

     *

     * @since v1.0.0 2025-10-31

     * @param mixed $label

     * @param mixed $content

     * @return void

     */
public /**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @param mixed $content
 * @return void
 */
function __construct($label = null, $content = null)
    {
        // Create the label cell (left) with default class and width
        $this->labelCell = new HtmlTd($label);
        $this->labelCell->addAttribute(new HtmlAttribute('class', 'label'));
        $this->labelCell->addAttribute(new HtmlAttribute('width', '25%'));
        
        // Create the content cell (right)
        $this->contentCell = new HtmlTd($content);
    }

    /**

     * Set the width of the label cell

     *

     * @since v1.0.0 2026-04-13

     * @param int $width Width as percentage (e.g., 25 for 25%)

     * @return self Fluent interface

     */
    public /**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @param int $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @param int $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @param int $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @param int $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @param int $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @param int $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @param int $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @param int $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @param int $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @param int $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @param int $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
/**
 * setLabelWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @return self
 */
function setLabelWidth(int $width): self
    {
        // Update or replace the width attribute
        $this->labelCell->addAttribute(new HtmlAttribute('width', $width . '%'));
        return $this;
    }

    /**

     * Set the CSS class for the label cell

     *

     * @since v1.0.0 2026-04-13

     * @param string $class The CSS class name

     * @return self Fluent interface

     */
    public /**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @param string $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @param string $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @param string $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @param string $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @param string $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @param string $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @param string $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @param string $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @param string $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @param string $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @param string $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setLabelClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
function setLabelClass(string $class): self
    {
        // Update or replace the class attribute
        $this->labelCell->addAttribute(new HtmlAttribute('class', $class));
        return $this;
    }

    /**

     * Set additional attributes for the content cell

     *

     * @deprecated This method parses string attributes. Better to use addContentCellAttribute()

     * @since v1.0.0 2026-04-13

     * @param string $attributes HTML attributes (e.g., 'colspan="2" class="value"')

     * @return self Fluent interface

     */
    public /**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @param string $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @param string $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @param string $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @param string $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @param string $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @param string $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @param string $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @param string $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @param string $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @param string $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @param string $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
/**
 * setContentCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attributes
 * @return self
 */
function setContentCellAttributes(string $attributes): self
    {
        // Parse the attributes string and add them individually
        // This is a simple implementation for backward compatibility
        if (preg_match_all('/(\w+)="([^"]*)"/', $attributes, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $this->contentCell->addAttribute(new HtmlAttribute($match[1], $match[2]));
            }
        }
        return $this;
    }

    /**

     * Add a single attribute to the content cell

     *

     * @since v1.0.0 2026-04-13

     * @param string $name Attribute name

     * @param string $value Attribute value

     * @return self Fluent interface

     */
    public /**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @param string $name
 * @param string $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @param string $name
 * @param string $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @param string $name
 * @param string $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @param string $name
 * @param string $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @param string $name
 * @param string $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @param string $name
 * @param string $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @param string $name
 * @param string $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @param string $name
 * @param string $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @param string $name
 * @param string $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @param string $name
 * @param string $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @param string $name
 * @param string $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
/**
 * addContentCellAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
function addContentCellAttribute(string $name, string $value): self
    {
        $this->contentCell->addAttribute(new HtmlAttribute($name, $value));
        return $this;
    }

    /**

     * Get the HTML representation

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

     * Delegates to composed HtmlTd elements, which recursively call getHtml()

     * 

     * 

     * 

     * No hardcoded HTML tags - each component renders itself!

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

     * 

     *

     * @since v1.0.0 2026-04-13

     * @return string The complete HTML table row

     */
    public /**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getHtml(): string
    {
        // Build row with proper nested structure - each cell renders itself recursively
        $html = '<tr>';
        $html .= $this->labelCell->getHtml();
        $html .= $this->contentCell->getHtml();
        $html .= '</tr>';
        
        return $html;
    }

    /**

     * Render the HTML to output

     *

     * @since v1.0.0 2026-04-13

     * @return void

     */
    public /**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function toHtml(): void
    {
        echo $this->getHtml();
    }
}

