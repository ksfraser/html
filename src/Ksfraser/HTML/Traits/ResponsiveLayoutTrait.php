<?php

namespace Ksfraser\HTML\Traits;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * ResponsiveLayoutTrait - FR-013

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

 * Provides utility methods for responsive design and layout

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Static factory methods for creating layout containers:

 * 

 * 

 * 

 * - Grid: container(), containerFluid(), row(), column(), columnResponsive()

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Instance methods for applying utility classes:

 * 

 * 

 * 

 * - Spacing: margins, padding (all directions and responsive breakpoints)

 * 

 * 

 * 

 * - Display: flex, grid, inline, none, responsive display

 * 

 * 

 * 

 * - Sizing: width, height, max-width, max-height

 * 

 * 

 * 

 * - Flexbox: direction, wrap, justify-content, align-items, grow/shrink

 * 

 * 

 * 

 * - Text: alignment, truncation, responsive text alignment

 * 

 * 

 * 

 * - Overflow: auto, hidden, scrolling

 * 

 * 

 * 

 * - Borders: all sides, radius, color variants

 * 

 * 

 * 

 * - Shadows: sm, normal, lg

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Integration with previous traits:

 * 

 * 

 * 

 * - CSSManagementTrait: All utilities applied through CSS classes

 * 

 * 

 * 

 * - DataAttributeTrait: Data attributes for JS responsive behavior

 * 

 * 

 * 

 * - AriaAttributeTrait: ARIA attributes for accessibility

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Usage:

 * 

 * 

 * 

 *   $container = HtmlElement::container()

 * 

 * 

 * 

 *       ->addNested(HtmlElement::row()

 * 

 * 

 * 

 *           ->addNested(HtmlElement::columnResponsive(['xs' => 12, 'md' => 6])));

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *   $elem = HtmlElement::div()

 * 

 * 

 * 

 *       ->applyDisplay('flex')

 * 

 * 

 * 

 *       ->applyJustifyContent('center')

 * 

 * 

 * 

 *       ->applyAlignItems('center');

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

 * @since 1.0.5 2026-03-30

 * @package Ksfraser\HTML\Traits

 * @return void

 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * ResponsiveLayoutTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
trait ResponsiveLayoutTrait
{
    // ========================================================================
    // GRID SYSTEM - STATIC FACTORY METHODS
    // ========================================================================

    /**

     * Create a Bootstrap container

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

     *   $container = HtmlElement::container();

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

     * @since 1.0.5 2026-03-30

     * @example 

     * @return HtmlElement

     */
    public static /**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @return HtmlElement
 */
/**
 * container
 *
 * @return HtmlElement
 */
/**
 * container
 *
 * @return HtmlElement
 */
/**
 * container
 *
 * @return HtmlElement
 */
/**
 * container
 *
 * @return HtmlElement
 */
/**
 * container
 *
 * @return HtmlElement
 */
/**
 * container
 *
 * @return HtmlElement
 */
/**
 * container
 *
 * @return HtmlElement
 */
/**
 * container
 *
 * @return HtmlElement
 */
/**
 * container
 *
 * @return HtmlElement
 */
/**
 * container
 *
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * container
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function container(): HtmlElement
    {
        $cont = self::element('div');
        $cont->addCSSClass('container');
        return $cont;
    }

    /**

     * Create a fluid container (full-width)

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static /**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * containerFluid
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function containerFluid(): HtmlElement
    {
        $cont = self::element('div');
        $cont->addCSSClass('container-fluid');
        return $cont;
    }

    /**

     * Create a Bootstrap row

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static /**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @return HtmlElement
 */
/**
 * row
 *
 * @return HtmlElement
 */
/**
 * row
 *
 * @return HtmlElement
 */
/**
 * row
 *
 * @return HtmlElement
 */
/**
 * row
 *
 * @return HtmlElement
 */
/**
 * row
 *
 * @return HtmlElement
 */
/**
 * row
 *
 * @return HtmlElement
 */
/**
 * row
 *
 * @return HtmlElement
 */
/**
 * row
 *
 * @return HtmlElement
 */
/**
 * row
 *
 * @return HtmlElement
 */
/**
 * row
 *
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * row
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function row(): HtmlElement
    {
        $row = self::element('div');
        $row->addCSSClass('row');
        return $row;
    }

    /**

     * Create a Bootstrap column

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

     *   $col = HtmlElement::column(6);  // Half width

     * 

     * 

     * 

     *   $col = HtmlElement::column(4, 2);  // 1/3 width, offset by 1/6

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

     * @since v2.0.1 2026-04-14

     * @example 

     * @param ?int $width

     * @param ?int $offset

     * @return HtmlElement

     */
    public static /**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @param int|null $width
 * @param int|null $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @param int|null $width
 * @param int|null $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @param int|null $width
 * @param int|null $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @param int|null $width
 * @param int|null $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @param int|null $width
 * @param int|null $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @param int|null $width
 * @param int|null $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @param int|null $width
 * @param int|null $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @param int|null $width
 * @param int|null $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @param int|null $width
 * @param int|null $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @param int|null $width
 * @param int|null $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @param int|null $width
 * @param int|null $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
/**
 * column
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $width
 * @param mixed $offset
 * @return HtmlElement
 */
function column(?int $width = null, ?int $offset = null): HtmlElement
    {
        $col = self::element('div');
        
        if ($width !== null) {
            $col->addCSSClass('col-' . $width);
        } else {
            $col->addCSSClass('col');
        }
        
        if ($offset !== null && $offset > 0) {
            $col->addCSSClass('offset-' . $offset);
        }
        
        return $col;
    }

    /**

     * Create a responsive column with breakpoint-specific widths

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

     *   $col = HtmlElement::columnResponsive([

     * 

     * 

     * 

     *       'xs' => 12,  // Full width on xs

     * 

     * 

     * 

     *       'sm' => 12,  // Full width on sm

     * 

     * 

     * 

     *       'md' => 6,   // Half width on md and up

     * 

     * 

     * 

     *       'lg' => 4    // 1/3 width on lg and up

     * 

     * 

     * 

     *   ]);

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

     * @since v1.0.5 2026-04-14

     * @example 

     * @param array $breakpoints Mapping of breakpoint => width (xs, sm, md, lg, xl)

     * @return HtmlElement

     */
    public static /**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @param array $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @param array $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @param array $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @param array $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @param array $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @param array $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @param array $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @param array $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @param array $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @param array $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @param array $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
/**
 * columnResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $breakpoints
 * @return HtmlElement
 */
function columnResponsive(array $breakpoints): HtmlElement
    {
        $col = self::element('div');
        
        foreach ($breakpoints as $breakpoint => $width) {
            if ($breakpoint === 'xs') {
                $col->addCSSClass('col-' . $width);
            } else {
                $col->addCSSClass('col-' . $breakpoint . '-' . $width);
            }
        }
        
        return $col;
    }

    // ========================================================================
    // SPACING UTILITIES - MARGINS
    // ========================================================================

    /**

     * Apply margin to all sides

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $value Margin scale (0-5)

     * @return HtmlElementInterface

     */
    public static /**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMargin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
function applyMargin(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('m-' . $value);
        }
        return $element;
    }

    /**

     * Apply margin-top

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $value Margin scale (0-5)

     * @return HtmlElementInterface

     */
    public static /**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
function applyMarginTop(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('mt-' . $value);
        }
        return $element;
    }

    /**

     * Apply margin-bottom

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $value Margin scale (0-5)

     * @return HtmlElementInterface

     */
    public static /**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
function applyMarginBottom(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('mb-' . $value);
        }
        return $element;
    }

    /**

     * Apply margin-left

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $value Margin scale (0-5)

     * @return HtmlElementInterface

     */
    public static /**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
function applyMarginLeft(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('ml-' . $value);
        }
        return $element;
    }

    /**

     * Apply margin-right

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $value Margin scale (0-5)

     * @return HtmlElementInterface

     */
    public static /**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
function applyMarginRight(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('mr-' . $value);
        }
        return $element;
    }

    /**

     * Apply horizontal margins (left & right)

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $value Margin scale (0-5)

     * @return HtmlElementInterface

     */
    public static /**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
function applyMarginHorizontal(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('mx-' . $value);
        }
        return $element;
    }

    /**

     * Apply vertical margins (top & bottom)

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $value Margin scale (0-5)

     * @return HtmlElementInterface

     */
    public static /**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyMarginVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
function applyMarginVertical(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('my-' . $value);
        }
        return $element;
    }

    /**

     * Center element horizontally with auto margin

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @return HtmlElementInterface

     */
    public static /**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyMarginAuto
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
function applyMarginAuto(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('mx-auto');
        }
        return $element;
    }

    // ========================================================================
    // SPACING UTILITIES - PADDING
    // ========================================================================

    /**

     * Apply padding to all sides

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $value Padding scale (0-5)

     * @return HtmlElementInterface

     */
    public static /**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPadding
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
function applyPadding(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('p-' . $value);
        }
        return $element;
    }

    /**

     * Apply padding-top

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $value Padding scale (0-5)

     * @return HtmlElementInterface

     */
    public static /**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
function applyPaddingTop(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('pt-' . $value);
        }
        return $element;
    }

    /**

     * Apply padding-bottom

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $value Padding scale (0-5)

     * @return HtmlElementInterface

     */
    public static /**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
function applyPaddingBottom(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('pb-' . $value);
        }
        return $element;
    }

    /**

     * Apply padding-left

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $value Padding scale (0-5)

     * @return HtmlElementInterface

     */
    public static /**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
function applyPaddingLeft(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('pl-' . $value);
        }
        return $element;
    }

    /**

     * Apply padding-right

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $value Padding scale (0-5)

     * @return HtmlElementInterface

     */
    public static /**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
function applyPaddingRight(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('pr-' . $value);
        }
        return $element;
    }

    /**

     * Apply horizontal padding (left & right)

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $value Padding scale (0-5)

     * @return HtmlElementInterface

     */
    public static /**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingHorizontal
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
function applyPaddingHorizontal(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('px-' . $value);
        }
        return $element;
    }

    /**

     * Apply vertical padding (top & bottom)

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $value Padding scale (0-5)

     * @return HtmlElementInterface

     */
    public static /**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @param HtmlElementInterface $element
 * @param int $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
/**
 * applyPaddingVertical
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $value
 * @return HtmlElementInterface
 */
function applyPaddingVertical(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('py-' . $value);
        }
        return $element;
    }

    // ========================================================================
    // DISPLAY UTILITIES
    // ========================================================================

    /**

     * Apply display property

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param string $display Display type (flex, block, inline, inline-block, grid, none)

     * @return HtmlElementInterface

     */
    public static /**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @param HtmlElementInterface $element
 * @param string $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @param HtmlElementInterface $element
 * @param string $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @param HtmlElementInterface $element
 * @param string $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @param HtmlElementInterface $element
 * @param string $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @param HtmlElementInterface $element
 * @param string $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @param HtmlElementInterface $element
 * @param string $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @param HtmlElementInterface $element
 * @param string $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @param HtmlElementInterface $element
 * @param string $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @param HtmlElementInterface $element
 * @param string $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @param HtmlElementInterface $element
 * @param string $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @param HtmlElementInterface $element
 * @param string $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
/**
 * applyDisplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $display
 * @return HtmlElementInterface
 */
function applyDisplay(HtmlElementInterface $element, string $display): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('d-' . $display);
        }
        return $element;
    }

    /**

     * Apply responsive display classes

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

     *   applyDisplayResponsive($elem, [

     * 

     * 

     * 

     *       'xs' => 'block',

     * 

     * 

     * 

     *       'md' => 'none',

     * 

     * 

     * 

     *       'lg' => 'flex'

     * 

     * 

     * 

     *   ])

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

     * @since v1.0.5 2026-04-14

     * @example 

     * @param HtmlElementInterface $element Element to modify

     * @param array $breakpoints Mapping of breakpoint => display type

     * @return HtmlElementInterface

     */
    public static /**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyDisplayResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
function applyDisplayResponsive(HtmlElementInterface $element, array $breakpoints): HtmlElementInterface
    {
        if ($element instanceof self) {
            foreach ($breakpoints as $breakpoint => $display) {
                if ($breakpoint === 'xs') {
                    $element->addCSSClass('d-' . $display);
                } else {
                    $element->addCSSClass('d-' . $breakpoint . '-' . $display);
                }
            }
        }
        return $element;
    }

    /**

     * Hide element

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @return HtmlElementInterface

     */
    public static /**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyHidden
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
function applyHidden(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('d-none');
        }
        return $element;
    }

    /**

     * Show element (remove hidden class)

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @return HtmlElementInterface

     */
    public static /**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyVisible
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
function applyVisible(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->removeCSSClass('d-none');
        }
        return $element;
    }

    // ========================================================================
    // SIZING UTILITIES
    // ========================================================================

    /**

     * Apply width percentage

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $percentage Width percentage (25, 50, 75, 100)

     * @return HtmlElementInterface

     */
    public static /**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
function applyWidth(HtmlElementInterface $element, int $percentage): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('w-' . $percentage);
        }
        return $element;
    }

    /**

     * Apply height percentage

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $percentage Height percentage (25, 50, 75, 100)

     * @return HtmlElementInterface

     */
    public static /**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
function applyHeight(HtmlElementInterface $element, int $percentage): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('h-' . $percentage);
        }
        return $element;
    }

    /**

     * Apply max-width

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $percentage Max-width percentage (100)

     * @return HtmlElementInterface

     */
    public static /**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxWidth
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
function applyMaxWidth(HtmlElementInterface $element, int $percentage): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('mw-' . $percentage);
        }
        return $element;
    }

    /**

     * Apply max-height

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param int $percentage Max-height percentage (100)

     * @return HtmlElementInterface

     */
    public static /**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @param HtmlElementInterface $element
 * @param int $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
/**
 * applyMaxHeight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $percentage
 * @return HtmlElementInterface
 */
function applyMaxHeight(HtmlElementInterface $element, int $percentage): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('mh-' . $percentage);
        }
        return $element;
    }

    // ========================================================================
    // FLEXBOX UTILITIES
    // ========================================================================

    /**

     * Apply flex direction

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param string $direction Direction (row, column, row-reverse, column-reverse)

     * @return HtmlElementInterface

     */
    public static /**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @param HtmlElementInterface $element
 * @param string $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @param HtmlElementInterface $element
 * @param string $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @param HtmlElementInterface $element
 * @param string $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @param HtmlElementInterface $element
 * @param string $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @param HtmlElementInterface $element
 * @param string $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @param HtmlElementInterface $element
 * @param string $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @param HtmlElementInterface $element
 * @param string $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @param HtmlElementInterface $element
 * @param string $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @param HtmlElementInterface $element
 * @param string $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @param HtmlElementInterface $element
 * @param string $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @param HtmlElementInterface $element
 * @param string $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
/**
 * applyFlexDirection
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $direction
 * @return HtmlElementInterface
 */
function applyFlexDirection(HtmlElementInterface $element, string $direction): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('flex-' . $direction);
        }
        return $element;
    }

    /**

     * Apply flex-wrap

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @return HtmlElementInterface

     */
    public static /**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexWrap
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
function applyFlexWrap(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('flex-wrap');
        }
        return $element;
    }

    /**

     * Apply justify-content

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param string $alignment Alignment (start, end, center, between, around, evenly)

     * @return HtmlElementInterface

     */
    public static /**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyJustifyContent
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
function applyJustifyContent(HtmlElementInterface $element, string $alignment): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('justify-content-' . $alignment);
        }
        return $element;
    }

    /**

     * Apply align-items

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param string $alignment Alignment (start, end, center, baseline, stretch)

     * @return HtmlElementInterface

     */
    public static /**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyAlignItems
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
function applyAlignItems(HtmlElementInterface $element, string $alignment): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('align-items-' . $alignment);
        }
        return $element;
    }

    /**

     * Apply flex-grow

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @return HtmlElementInterface

     */
    public static /**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexGrow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
function applyFlexGrow(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('flex-grow-1');
        }
        return $element;
    }

    /**

     * Apply flex-shrink

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @return HtmlElementInterface

     */
    public static /**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyFlexShrink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
function applyFlexShrink(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('flex-shrink-1');
        }
        return $element;
    }

    // ========================================================================
    // TEXT ALIGNMENT
    // ========================================================================

    /**

     * Apply text alignment

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param string $alignment Alignment (left, center, right, justify)

     * @return HtmlElementInterface

     */
    public static /**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @param HtmlElementInterface $element
 * @param string $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
/**
 * applyTextAlign
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $alignment
 * @return HtmlElementInterface
 */
function applyTextAlign(HtmlElementInterface $element, string $alignment): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('text-' . $alignment);
        }
        return $element;
    }

    /**

     * Apply responsive text alignment

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param array $breakpoints Mapping of breakpoint => alignment

     * @return HtmlElementInterface

     */
    public static /**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @param HtmlElementInterface $element
 * @param array $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
/**
 * applyTextAlignResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $breakpoints
 * @return HtmlElementInterface
 */
function applyTextAlignResponsive(HtmlElementInterface $element, array $breakpoints): HtmlElementInterface
    {
        if ($element instanceof self) {
            foreach ($breakpoints as $breakpoint => $alignment) {
                if ($breakpoint === 'xs') {
                    $element->addCSSClass('text-' . $alignment);
                } else {
                    $element->addCSSClass('text-' . $breakpoint . '-' . $alignment);
                }
            }
        }
        return $element;
    }

    /**

     * Apply text truncation

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @return HtmlElementInterface

     */
    public static /**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyTextTruncate
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
function applyTextTruncate(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('text-truncate');
        }
        return $element;
    }

    // ========================================================================
    // OVERFLOW
    // ========================================================================

    /**

     * Apply overflow property

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @param string $overflow Overflow type (auto, hidden, visible, scroll)

     * @return HtmlElementInterface

     */
    public static /**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @param HtmlElementInterface $element
 * @param string $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @param HtmlElementInterface $element
 * @param string $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @param HtmlElementInterface $element
 * @param string $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @param HtmlElementInterface $element
 * @param string $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @param HtmlElementInterface $element
 * @param string $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @param HtmlElementInterface $element
 * @param string $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @param HtmlElementInterface $element
 * @param string $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @param HtmlElementInterface $element
 * @param string $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @param HtmlElementInterface $element
 * @param string $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @param HtmlElementInterface $element
 * @param string $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @param HtmlElementInterface $element
 * @param string $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
/**
 * applyOverflow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $overflow
 * @return HtmlElementInterface
 */
function applyOverflow(HtmlElementInterface $element, string $overflow): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('overflow-' . $overflow);
        }
        return $element;
    }

    // ========================================================================
    // BORDERS
    // ========================================================================

    /**

     * Apply border to all sides

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @return HtmlElementInterface

     */
    public static /**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorder
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
function applyBorder(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('border');
        }
        return $element;
    }

    /**

     * Apply border-top

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @return HtmlElementInterface

     */
    public static /**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderTop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
function applyBorderTop(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('border-top');
        }
        return $element;
    }

    /**

     * Apply border-bottom

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @return HtmlElementInterface

     */
    public static /**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderBottom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
function applyBorderBottom(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('border-bottom');
        }
        return $element;
    }

    /**

     * Apply border-left

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @return HtmlElementInterface

     */
    public static /**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderLeft
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
function applyBorderLeft(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('border-left');
        }
        return $element;
    }

    /**

     * Apply border-right

     *

     * @since v1.0.5 2026-04-14

     * @param HtmlElementInterface $element Element to modify

     * @return HtmlElementInterface

     */
    public static /**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @param HtmlElementInterface $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
/**
 * applyBorderRight
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return HtmlElementInterface
 */
function applyBorderRight(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('border-right');
        }
        return $element;
    }

    /**

     * Apply border-radius

     *

     * @since v2.0.1 2026-04-14

     * @param HtmlElementInterface $element

     * @param ?string $style

     * @return HtmlElementInterface

     */
    public static /**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @param HtmlElementInterface $element
 * @param string|null $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @param HtmlElementInterface $element
 * @param string|null $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @param HtmlElementInterface $element
 * @param string|null $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @param HtmlElementInterface $element
 * @param string|null $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @param HtmlElementInterface $element
 * @param string|null $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @param HtmlElementInterface $element
 * @param string|null $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @param HtmlElementInterface $element
 * @param string|null $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @param HtmlElementInterface $element
 * @param string|null $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @param HtmlElementInterface $element
 * @param string|null $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @param HtmlElementInterface $element
 * @param string|null $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @param HtmlElementInterface $element
 * @param string|null $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
/**
 * applyBorderRadius
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $style
 * @return HtmlElementInterface
 */
function applyBorderRadius(HtmlElementInterface $element, ?string $style = null): HtmlElementInterface
    {
        if ($element instanceof self) {
            if ($style === 'circle') {
                $element->addCSSClass('rounded-circle');
            } else {
                $element->addCSSClass('rounded');
            }
        }
        return $element;
    }

    // ========================================================================
    // SHADOWS
    // ========================================================================

    /**

     * Apply box shadow

     *

     * @since v2.0.1 2026-04-14

     * @param HtmlElementInterface $element

     * @param ?string $size

     * @return HtmlElementInterface

     */
    public static /**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @param HtmlElementInterface $element
 * @param string|null $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @param HtmlElementInterface $element
 * @param string|null $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @param HtmlElementInterface $element
 * @param string|null $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @param HtmlElementInterface $element
 * @param string|null $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @param HtmlElementInterface $element
 * @param string|null $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @param HtmlElementInterface $element
 * @param string|null $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @param HtmlElementInterface $element
 * @param string|null $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @param HtmlElementInterface $element
 * @param string|null $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @param HtmlElementInterface $element
 * @param string|null $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @param HtmlElementInterface $element
 * @param string|null $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @param HtmlElementInterface $element
 * @param string|null $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
/**
 * applyShadow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @param mixed $size
 * @return HtmlElementInterface
 */
function applyShadow(HtmlElementInterface $element, ?string $size = null): HtmlElementInterface
    {
        if ($element instanceof self) {
            if ($size === 'sm') {
                $element->addCSSClass('shadow-sm');
            } elseif ($size === 'lg') {
                $element->addCSSClass('shadow-lg');
            } else {
                $element->addCSSClass('shadow');
            }
        }
        return $element;
    }
}
