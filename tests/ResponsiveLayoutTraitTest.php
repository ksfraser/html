<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;

/**
 * ResponsiveLayoutTraitTest - FR-013
 *
 * Comprehensive test suite for responsive design and layout utilities
 * Tests grid system, spacing, display, sizing, and responsive classes
 *
 *
 * @group FR-013
 * @group Layout
 * @since 1.0.5 2026-03-30
 */
class ResponsiveLayoutTraitTest extends TestCase
{
    // ============================================================================
    // GRID SYSTEM TESTS
    // ============================================================================

    /**
     * @test
     * @group layout
     * @group grid
 * @return void
 * @since 1.0.5 2026-03-30
     */
    public function container_creates_container_div()
    {
        $container = HtmlElement::container();
        
        $this->assertEquals('div', $container->getTag());
        $this->assertTrue($container->hasCSSClass('container'));
    }

    /**
     * @test
     * @group layout
     * @group grid
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function container_fluid_creates_fluid_container()
    {
        $container = HtmlElement::containerFluid();
        
        $this->assertEquals('div', $container->getTag());
        $this->assertTrue($container->hasCSSClass('container-fluid'));
    }

    /**
     * @test
     * @group layout
     * @group grid
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function row_creates_row_div()
    {
        $row = HtmlElement::row();
        
        $this->assertEquals('div', $row->getTag());
        $this->assertTrue($row->hasCSSClass('row'));
    }

    /**
     * @test
     * @group layout
     * @group grid
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function column_creates_column_with_width()
    {
        $col = HtmlElement::column(6);
        
        $this->assertEquals('div', $col->getTag());
        $this->assertTrue($col->hasCSSClass('col-6'));
    }

    /**
     * @test
     * @group layout
     * @group grid
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function column_full_width_default()
    {
        $col = HtmlElement::column();
        
        $this->assertTrue($col->hasCSSClass('col'));
    }

    /**
     * @test
     * @group layout
     * @group grid
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function column_responsive_creates_breakpoint_classes()
    {
        $col = HtmlElement::columnResponsive([
            'xs' => 12,
            'sm' => 6,
            'md' => 4,
            'lg' => 3,
            'xl' => 2
        ]);
        
        $this->assertTrue($col->hasCSSClass('col-12'));
        $this->assertTrue($col->hasCSSClass('col-sm-6'));
        $this->assertTrue($col->hasCSSClass('col-md-4'));
        $this->assertTrue($col->hasCSSClass('col-lg-3'));
        $this->assertTrue($col->hasCSSClass('col-xl-2'));
    }

    /**
     * @test
     * @group layout
     * @group grid
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function column_offset_adds_offset_class()
    {
        $col = HtmlElement::column(6, 3);
        
        $this->assertTrue($col->hasCSSClass('col-6'));
        $this->assertTrue($col->hasCSSClass('offset-3'));
    }

    // ============================================================================
    // SPACING UTILITY TESTS
    // ============================================================================

    /**
     * @test
     * @group layout
     * @group spacing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function margin_all_adds_margin_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyMargin($elem, 3);
        
        $this->assertTrue($elem->hasCSSClass('m-3'));
    }

    /**
     * @test
     * @group layout
     * @group spacing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function margin_top_adds_margin_top_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyMarginTop($elem, 2);
        
        $this->assertTrue($elem->hasCSSClass('mt-2'));
    }

    /**
     * @test
     * @group layout
     * @group spacing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function margin_bottom_adds_margin_bottom_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyMarginBottom($elem, 4);
        
        $this->assertTrue($elem->hasCSSClass('mb-4'));
    }

    /**
     * @test
     * @group layout
     * @group spacing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function margin_horizontal_adds_margin_horizontal_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyMarginHorizontal($elem, 2);
        
        $this->assertTrue($elem->hasCSSClass('mx-2'));
    }

    /**
     * @test
     * @group layout
     * @group spacing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function margin_vertical_adds_margin_vertical_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyMarginVertical($elem, 3);
        
        $this->assertTrue($elem->hasCSSClass('my-3'));
    }

    /**
     * @test
     * @group layout
     * @group spacing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function padding_all_adds_padding_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyPadding($elem, 3);
        
        $this->assertTrue($elem->hasCSSClass('p-3'));
    }

    /**
     * @test
     * @group layout
     * @group spacing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function padding_top_adds_padding_top_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyPaddingTop($elem, 2);
        
        $this->assertTrue($elem->hasCSSClass('pt-2'));
    }

    /**
     * @test
     * @group layout
     * @group spacing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function padding_bottom_adds_padding_bottom_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyPaddingBottom($elem, 4);
        
        $this->assertTrue($elem->hasCSSClass('pb-4'));
    }

    /**
     * @test
     * @group layout
     * @group spacing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function padding_horizontal_adds_padding_horizontal_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyPaddingHorizontal($elem, 2);
        
        $this->assertTrue($elem->hasCSSClass('px-2'));
    }

    /**
     * @test
     * @group layout
     * @group spacing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function padding_vertical_adds_padding_vertical_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyPaddingVertical($elem, 3);
        
        $this->assertTrue($elem->hasCSSClass('py-3'));
    }

    /**
     * @test
     * @group layout
     * @group spacing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function margin_auto_centers_element_horizontally()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyMarginAuto($elem);
        
        $this->assertTrue($elem->hasCSSClass('mx-auto'));
    }

    // ============================================================================
    // DISPLAY AND VISIBILITY TESTS
    // ============================================================================

    /**
     * @test
     * @group layout
     * @group display
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function display_flex_adds_flex_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyDisplay($elem, 'flex');
        
        $this->assertTrue($elem->hasCSSClass('d-flex'));
    }

    /**
     * @test
     * @group layout
     * @group display
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function display_grid_adds_grid_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyDisplay($elem, 'grid');
        
        $this->assertTrue($elem->hasCSSClass('d-grid'));
    }

    /**
     * @test
     * @group layout
     * @group display
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function display_none_adds_none_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyDisplay($elem, 'none');
        
        $this->assertTrue($elem->hasCSSClass('d-none'));
    }

    /**
     * @test
     * @group layout
     * @group display
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function display_inline_adds_inline_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyDisplay($elem, 'inline');
        
        $this->assertTrue($elem->hasCSSClass('d-inline'));
    }

    /**
     * @test
     * @group layout
     * @group display
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function display_inline_block_adds_inline_block_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyDisplay($elem, 'inline-block');
        
        $this->assertTrue($elem->hasCSSClass('d-inline-block'));
    }

    /**
     * @test
     * @group layout
     * @group display
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function hidden_adds_hidden_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyHidden($elem);
        
        $this->assertTrue($elem->hasCSSClass('d-none'));
    }

    /**
     * @test
     * @group layout
     * @group display
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function visible_removes_hidden_class()
    {
        $elem = HtmlElement::div();
        $elem->addCSSClass('d-none');
        $elem = HtmlElement::applyVisible($elem);
        
        $this->assertFalse($elem->hasCSSClass('d-none'));
    }

    /**
     * @test
     * @group layout
     * @group display
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function responsive_display_adds_breakpoint_classes()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyDisplayResponsive($elem, [
            'xs' => 'block',
            'md' => 'none',
            'lg' => 'flex'
        ]);
        
        $this->assertTrue($elem->hasCSSClass('d-block'));
        $this->assertTrue($elem->hasCSSClass('d-md-none'));
        $this->assertTrue($elem->hasCSSClass('d-lg-flex'));
    }

    // ============================================================================
    // SIZING UTILITY TESTS
    // ============================================================================

    /**
     * @test
     * @group layout
     * @group sizing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function width_100_adds_full_width_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyWidth($elem, 100);
        
        $this->assertTrue($elem->hasCSSClass('w-100'));
    }

    /**
     * @test
     * @group layout
     * @group sizing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function width_75_adds_width_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyWidth($elem, 75);
        
        $this->assertTrue($elem->hasCSSClass('w-75'));
    }

    /**
     * @test
     * @group layout
     * @group sizing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function width_50_adds_width_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyWidth($elem, 50);
        
        $this->assertTrue($elem->hasCSSClass('w-50'));
    }

    /**
     * @test
     * @group layout
     * @group sizing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function width_25_adds_width_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyWidth($elem, 25);
        
        $this->assertTrue($elem->hasCSSClass('w-25'));
    }

    /**
     * @test
     * @group layout
     * @group sizing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function height_100_adds_full_height_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyHeight($elem, 100);
        
        $this->assertTrue($elem->hasCSSClass('h-100'));
    }

    /**
     * @test
     * @group layout
     * @group sizing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function max_width_100_adds_max_width_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyMaxWidth($elem, 100);
        
        $this->assertTrue($elem->hasCSSClass('mw-100'));
    }

    /**
     * @test
     * @group layout
     * @group sizing
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function max_height_100_adds_max_height_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyMaxHeight($elem, 100);
        
        $this->assertTrue($elem->hasCSSClass('mh-100'));
    }

    // ============================================================================
    // FLEXBOX UTILITY TESTS
    // ============================================================================

    /**
     * @test
     * @group layout
     * @group flexbox
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function flex_direction_column_adds_flex_column_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyFlexDirection($elem, 'column');
        
        $this->assertTrue($elem->hasCSSClass('flex-column'));
    }

    /**
     * @test
     * @group layout
     * @group flexbox
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function flex_direction_row_adds_flex_row_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyFlexDirection($elem, 'row');
        
        $this->assertTrue($elem->hasCSSClass('flex-row'));
    }

    /**
     * @test
     * @group layout
     * @group flexbox
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function flex_wrap_adds_flex_wrap_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyFlexWrap($elem);
        
        $this->assertTrue($elem->hasCSSClass('flex-wrap'));
    }

    /**
     * @test
     * @group layout
     * @group flexbox
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function justify_content_center_adds_justify_center_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyJustifyContent($elem, 'center');
        
        $this->assertTrue($elem->hasCSSClass('justify-content-center'));
    }

    /**
     * @test
     * @group layout
     * @group flexbox
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function justify_content_between_adds_justify_between_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyJustifyContent($elem, 'between');
        
        $this->assertTrue($elem->hasCSSClass('justify-content-between'));
    }

    /**
     * @test
     * @group layout
     * @group flexbox
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function align_items_center_adds_align_center_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyAlignItems($elem, 'center');
        
        $this->assertTrue($elem->hasCSSClass('align-items-center'));
    }

    /**
     * @test
     * @group layout
     * @group flexbox
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function align_items_start_adds_align_start_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyAlignItems($elem, 'start');
        
        $this->assertTrue($elem->hasCSSClass('align-items-start'));
    }

    /**
     * @test
     * @group layout
     * @group flexbox
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function flex_grow_adds_flex_grow_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyFlexGrow($elem);
        
        $this->assertTrue($elem->hasCSSClass('flex-grow-1'));
    }

    /**
     * @test
     * @group layout
     * @group flexbox
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function flex_shrink_adds_flex_shrink_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyFlexShrink($elem);
        
        $this->assertTrue($elem->hasCSSClass('flex-shrink-1'));
    }

    // ============================================================================
    // TEXT ALIGNMENT TESTS
    // ============================================================================

    /**
     * @test
     * @group layout
     * @group text
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function text_align_center_adds_text_center_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyTextAlign($elem, 'center');
        
        $this->assertTrue($elem->hasCSSClass('text-center'));
    }

    /**
     * @test
     * @group layout
     * @group text
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function text_align_left_adds_text_left_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyTextAlign($elem, 'left');
        
        $this->assertTrue($elem->hasCSSClass('text-left'));
    }

    /**
     * @test
     * @group layout
     * @group text
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function text_align_right_adds_text_right_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyTextAlign($elem, 'right');
        
        $this->assertTrue($elem->hasCSSClass('text-right'));
    }

    /**
     * @test
     * @group layout
     * @group text
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function text_align_justify_adds_text_justify_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyTextAlign($elem, 'justify');
        
        $this->assertTrue($elem->hasCSSClass('text-justify'));
    }

    /**
     * @test
     * @group layout
     * @group text
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function text_align_responsive_adds_breakpoint_classes()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyTextAlignResponsive($elem, [
            'xs' => 'left',
            'md' => 'center',
            'lg' => 'right'
        ]);
        
        $this->assertTrue($elem->hasCSSClass('text-left'));
        $this->assertTrue($elem->hasCSSClass('text-md-center'));
        $this->assertTrue($elem->hasCSSClass('text-lg-right'));
    }

    // ============================================================================
    // OVERFLOW TESTS
    // ============================================================================

    /**
     * @test
     * @group layout
     * @group overflow
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function overflow_auto_adds_overflow_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyOverflow($elem, 'auto');
        
        $this->assertTrue($elem->hasCSSClass('overflow-auto'));
    }

    /**
     * @test
     * @group layout
     * @group overflow
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function overflow_hidden_adds_overflow_hidden_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyOverflow($elem, 'hidden');
        
        $this->assertTrue($elem->hasCSSClass('overflow-hidden'));
    }

    /**
     * @test
     * @group layout
     * @group overflow
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function text_truncate_adds_truncate_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyTextTruncate($elem);
        
        $this->assertTrue($elem->hasCSSClass('text-truncate'));
    }

    // ============================================================================
    // BORDER AND SHADOW TESTS
    // ============================================================================

    /**
     * @test
     * @group layout
     * @group borders
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function border_all_adds_border_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyBorder($elem);
        
        $this->assertTrue($elem->hasCSSClass('border'));
    }

    /**
     * @test
     * @group layout
     * @group borders
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function border_top_adds_border_top_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyBorderTop($elem);
        
        $this->assertTrue($elem->hasCSSClass('border-top'));
    }

    /**
     * @test
     * @group layout
     * @group borders
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function border_bottom_adds_border_bottom_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyBorderBottom($elem);
        
        $this->assertTrue($elem->hasCSSClass('border-bottom'));
    }

    /**
     * @test
     * @group layout
     * @group borders
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function border_radius_adds_rounded_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyBorderRadius($elem);
        
        $this->assertTrue($elem->hasCSSClass('rounded'));
    }

    /**
     * @test
     * @group layout
     * @group borders
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function border_radius_circle_adds_rounded_circle_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyBorderRadius($elem, 'circle');
        
        $this->assertTrue($elem->hasCSSClass('rounded-circle'));
    }

    /**
     * @test
     * @group layout
     * @group shadow
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function shadow_adds_shadow_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyShadow($elem);
        
        $this->assertTrue($elem->hasCSSClass('shadow'));
    }

    /**
     * @test
     * @group layout
     * @group shadow
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function shadow_sm_adds_shadow_small_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyShadow($elem, 'sm');
        
        $this->assertTrue($elem->hasCSSClass('shadow-sm'));
    }

    /**
     * @test
     * @group layout
     * @group shadow
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function shadow_lg_adds_shadow_large_class()
    {
        $elem = HtmlElement::div();
        $elem = HtmlElement::applyShadow($elem, 'lg');
        
        $this->assertTrue($elem->hasCSSClass('shadow-lg'));
    }
}
