<?php

namespace Ksfraser\HTML\Traits;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * ResponsiveLayoutTrait - FR-013
 * Provides utility methods for responsive design and layout
 *
 * Static factory methods for creating layout containers:
 * - Grid: container(), containerFluid(), row(), column(), columnResponsive()
 * 
 * Instance methods for applying utility classes:
 * - Spacing: margins, padding (all directions and responsive breakpoints)
 * - Display: flex, grid, inline, none, responsive display
 * - Sizing: width, height, max-width, max-height
 * - Flexbox: direction, wrap, justify-content, align-items, grow/shrink
 * - Text: alignment, truncation, responsive text alignment
 * - Overflow: auto, hidden, scrolling
 * - Borders: all sides, radius, color variants
 * - Shadows: sm, normal, lg
 *
 * Integration with previous traits:
 * - CSSManagementTrait: All utilities applied through CSS classes
 * - DataAttributeTrait: Data attributes for JS responsive behavior
 * - AriaAttributeTrait: ARIA attributes for accessibility
 *
 * Usage:
 *   $container = HtmlElement::container()
 *       ->addNested(HtmlElement::row()
 *           ->addNested(HtmlElement::columnResponsive(['xs' => 12, 'md' => 6])));
 *   
 *   $elem = HtmlElement::div()
 *       ->applyDisplay('flex')
 *       ->applyJustifyContent('center')
 *       ->applyAlignItems('center');
 *
 * @package Ksfraser\HTML\Traits
 * @since 1.0
 */
trait ResponsiveLayoutTrait
{
    // ========================================================================
    // GRID SYSTEM - STATIC FACTORY METHODS
    // ========================================================================

    /**
     * Create a Bootstrap container
     *
     * @return HtmlElement
     * @example
     *   $container = HtmlElement::container();
     */
    public static function container(): HtmlElement
    {
        $cont = new self('div');
        $cont->addCSSClass('container');
        return $cont;
    }

    /**
     * Create a fluid container (full-width)
     *
     * @return HtmlElement
     */
    public static function containerFluid(): HtmlElement
    {
        $cont = new self('div');
        $cont->addCSSClass('container-fluid');
        return $cont;
    }

    /**
     * Create a Bootstrap row
     *
     * @return HtmlElement
     */
    public static function row(): HtmlElement
    {
        $row = new self('div');
        $row->addCSSClass('row');
        return $row;
    }

    /**
     * Create a Bootstrap column
     *
     * @param int|null $width Column width (1-12)
     * @param int|null $offset Column offset (0-11)
     * @return HtmlElement
     * @example
     *   $col = HtmlElement::column(6);  // Half width
     *   $col = HtmlElement::column(4, 2);  // 1/3 width, offset by 1/6
     */
    public static function column(?int $width = null, ?int $offset = null): HtmlElement
    {
        $col = new self('div');
        
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
     * @param array $breakpoints Mapping of breakpoint => width (xs, sm, md, lg, xl)
     * @return HtmlElement
     * @example
     *   $col = HtmlElement::columnResponsive([
     *       'xs' => 12,  // Full width on xs
     *       'sm' => 12,  // Full width on sm
     *       'md' => 6,   // Half width on md and up
     *       'lg' => 4    // 1/3 width on lg and up
     *   ]);
     */
    public static function columnResponsive(array $breakpoints): HtmlElement
    {
        $col = new self('div');
        
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
     * @param HtmlElementInterface $element Element to modify
     * @param int $value Margin scale (0-5)
     * @return HtmlElementInterface
     */
    public static function applyMargin(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('m-' . $value);
        }
        return $element;
    }

    /**
     * Apply margin-top
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $value Margin scale (0-5)
     * @return HtmlElementInterface
     */
    public static function applyMarginTop(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('mt-' . $value);
        }
        return $element;
    }

    /**
     * Apply margin-bottom
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $value Margin scale (0-5)
     * @return HtmlElementInterface
     */
    public static function applyMarginBottom(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('mb-' . $value);
        }
        return $element;
    }

    /**
     * Apply margin-left
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $value Margin scale (0-5)
     * @return HtmlElementInterface
     */
    public static function applyMarginLeft(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('ml-' . $value);
        }
        return $element;
    }

    /**
     * Apply margin-right
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $value Margin scale (0-5)
     * @return HtmlElementInterface
     */
    public static function applyMarginRight(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('mr-' . $value);
        }
        return $element;
    }

    /**
     * Apply horizontal margins (left & right)
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $value Margin scale (0-5)
     * @return HtmlElementInterface
     */
    public static function applyMarginHorizontal(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('mx-' . $value);
        }
        return $element;
    }

    /**
     * Apply vertical margins (top & bottom)
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $value Margin scale (0-5)
     * @return HtmlElementInterface
     */
    public static function applyMarginVertical(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('my-' . $value);
        }
        return $element;
    }

    /**
     * Center element horizontally with auto margin
     *
     * @param HtmlElementInterface $element Element to modify
     * @return HtmlElementInterface
     */
    public static function applyMarginAuto(HtmlElementInterface $element): HtmlElementInterface
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
     * @param HtmlElementInterface $element Element to modify
     * @param int $value Padding scale (0-5)
     * @return HtmlElementInterface
     */
    public static function applyPadding(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('p-' . $value);
        }
        return $element;
    }

    /**
     * Apply padding-top
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $value Padding scale (0-5)
     * @return HtmlElementInterface
     */
    public static function applyPaddingTop(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('pt-' . $value);
        }
        return $element;
    }

    /**
     * Apply padding-bottom
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $value Padding scale (0-5)
     * @return HtmlElementInterface
     */
    public static function applyPaddingBottom(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('pb-' . $value);
        }
        return $element;
    }

    /**
     * Apply padding-left
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $value Padding scale (0-5)
     * @return HtmlElementInterface
     */
    public static function applyPaddingLeft(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('pl-' . $value);
        }
        return $element;
    }

    /**
     * Apply padding-right
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $value Padding scale (0-5)
     * @return HtmlElementInterface
     */
    public static function applyPaddingRight(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('pr-' . $value);
        }
        return $element;
    }

    /**
     * Apply horizontal padding (left & right)
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $value Padding scale (0-5)
     * @return HtmlElementInterface
     */
    public static function applyPaddingHorizontal(HtmlElementInterface $element, int $value): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('px-' . $value);
        }
        return $element;
    }

    /**
     * Apply vertical padding (top & bottom)
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $value Padding scale (0-5)
     * @return HtmlElementInterface
     */
    public static function applyPaddingVertical(HtmlElementInterface $element, int $value): HtmlElementInterface
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
     * @param HtmlElementInterface $element Element to modify
     * @param string $display Display type (flex, block, inline, inline-block, grid, none)
     * @return HtmlElementInterface
     */
    public static function applyDisplay(HtmlElementInterface $element, string $display): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('d-' . $display);
        }
        return $element;
    }

    /**
     * Apply responsive display classes
     *
     * @param HtmlElementInterface $element Element to modify
     * @param array $breakpoints Mapping of breakpoint => display type
     * @return HtmlElementInterface
     * @example
     *   applyDisplayResponsive($elem, [
     *       'xs' => 'block',
     *       'md' => 'none',
     *       'lg' => 'flex'
     *   ])
     */
    public static function applyDisplayResponsive(HtmlElementInterface $element, array $breakpoints): HtmlElementInterface
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
     * @param HtmlElementInterface $element Element to modify
     * @return HtmlElementInterface
     */
    public static function applyHidden(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('d-none');
        }
        return $element;
    }

    /**
     * Show element (remove hidden class)
     *
     * @param HtmlElementInterface $element Element to modify
     * @return HtmlElementInterface
     */
    public static function applyVisible(HtmlElementInterface $element): HtmlElementInterface
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
     * @param HtmlElementInterface $element Element to modify
     * @param int $percentage Width percentage (25, 50, 75, 100)
     * @return HtmlElementInterface
     */
    public static function applyWidth(HtmlElementInterface $element, int $percentage): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('w-' . $percentage);
        }
        return $element;
    }

    /**
     * Apply height percentage
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $percentage Height percentage (25, 50, 75, 100)
     * @return HtmlElementInterface
     */
    public static function applyHeight(HtmlElementInterface $element, int $percentage): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('h-' . $percentage);
        }
        return $element;
    }

    /**
     * Apply max-width
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $percentage Max-width percentage (100)
     * @return HtmlElementInterface
     */
    public static function applyMaxWidth(HtmlElementInterface $element, int $percentage): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('mw-' . $percentage);
        }
        return $element;
    }

    /**
     * Apply max-height
     *
     * @param HtmlElementInterface $element Element to modify
     * @param int $percentage Max-height percentage (100)
     * @return HtmlElementInterface
     */
    public static function applyMaxHeight(HtmlElementInterface $element, int $percentage): HtmlElementInterface
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
     * @param HtmlElementInterface $element Element to modify
     * @param string $direction Direction (row, column, row-reverse, column-reverse)
     * @return HtmlElementInterface
     */
    public static function applyFlexDirection(HtmlElementInterface $element, string $direction): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('flex-' . $direction);
        }
        return $element;
    }

    /**
     * Apply flex-wrap
     *
     * @param HtmlElementInterface $element Element to modify
     * @return HtmlElementInterface
     */
    public static function applyFlexWrap(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('flex-wrap');
        }
        return $element;
    }

    /**
     * Apply justify-content
     *
     * @param HtmlElementInterface $element Element to modify
     * @param string $alignment Alignment (start, end, center, between, around, evenly)
     * @return HtmlElementInterface
     */
    public static function applyJustifyContent(HtmlElementInterface $element, string $alignment): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('justify-content-' . $alignment);
        }
        return $element;
    }

    /**
     * Apply align-items
     *
     * @param HtmlElementInterface $element Element to modify
     * @param string $alignment Alignment (start, end, center, baseline, stretch)
     * @return HtmlElementInterface
     */
    public static function applyAlignItems(HtmlElementInterface $element, string $alignment): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('align-items-' . $alignment);
        }
        return $element;
    }

    /**
     * Apply flex-grow
     *
     * @param HtmlElementInterface $element Element to modify
     * @return HtmlElementInterface
     */
    public static function applyFlexGrow(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('flex-grow-1');
        }
        return $element;
    }

    /**
     * Apply flex-shrink
     *
     * @param HtmlElementInterface $element Element to modify
     * @return HtmlElementInterface
     */
    public static function applyFlexShrink(HtmlElementInterface $element): HtmlElementInterface
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
     * @param HtmlElementInterface $element Element to modify
     * @param string $alignment Alignment (left, center, right, justify)
     * @return HtmlElementInterface
     */
    public static function applyTextAlign(HtmlElementInterface $element, string $alignment): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('text-' . $alignment);
        }
        return $element;
    }

    /**
     * Apply responsive text alignment
     *
     * @param HtmlElementInterface $element Element to modify
     * @param array $breakpoints Mapping of breakpoint => alignment
     * @return HtmlElementInterface
     */
    public static function applyTextAlignResponsive(HtmlElementInterface $element, array $breakpoints): HtmlElementInterface
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
     * @param HtmlElementInterface $element Element to modify
     * @return HtmlElementInterface
     */
    public static function applyTextTruncate(HtmlElementInterface $element): HtmlElementInterface
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
     * @param HtmlElementInterface $element Element to modify
     * @param string $overflow Overflow type (auto, hidden, visible, scroll)
     * @return HtmlElementInterface
     */
    public static function applyOverflow(HtmlElementInterface $element, string $overflow): HtmlElementInterface
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
     * @param HtmlElementInterface $element Element to modify
     * @return HtmlElementInterface
     */
    public static function applyBorder(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('border');
        }
        return $element;
    }

    /**
     * Apply border-top
     *
     * @param HtmlElementInterface $element Element to modify
     * @return HtmlElementInterface
     */
    public static function applyBorderTop(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('border-top');
        }
        return $element;
    }

    /**
     * Apply border-bottom
     *
     * @param HtmlElementInterface $element Element to modify
     * @return HtmlElementInterface
     */
    public static function applyBorderBottom(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('border-bottom');
        }
        return $element;
    }

    /**
     * Apply border-left
     *
     * @param HtmlElementInterface $element Element to modify
     * @return HtmlElementInterface
     */
    public static function applyBorderLeft(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('border-left');
        }
        return $element;
    }

    /**
     * Apply border-right
     *
     * @param HtmlElementInterface $element Element to modify
     * @return HtmlElementInterface
     */
    public static function applyBorderRight(HtmlElementInterface $element): HtmlElementInterface
    {
        if ($element instanceof self) {
            $element->addCSSClass('border-right');
        }
        return $element;
    }

    /**
     * Apply border-radius
     *
     * @param HtmlElementInterface $element Element to modify
     * @param string|null $style Border style (null for default, circle for circle)
     * @return HtmlElementInterface
     */
    public static function applyBorderRadius(HtmlElementInterface $element, ?string $style = null): HtmlElementInterface
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
     * @param HtmlElementInterface $element Element to modify
     * @param string|null $size Shadow size (null for normal, sm, lg)
     * @return HtmlElementInterface
     */
    public static function applyShadow(HtmlElementInterface $element, ?string $size = null): HtmlElementInterface
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
