<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * ResponsiveLayoutTraitTest - FR-013
 *
 * Comprehensive tests for responsive layout utilities:
 * grid factories, spacing, display, sizing, flexbox, text, overflow, borders, shadows.
 *
 * @group FR-013
 * @group Layout
 */
class ResponsiveLayoutTraitTest extends TestCase
{
    // ============================================================================
    // GRID SYSTEM FACTORY METHODS
    // ============================================================================

    /** @test */
    public function container_creates_div_with_container_class(): void
    {
        $el = HtmlElement::container();
        $this->assertEquals('div', $el->getTag());
        $this->assertTrue($el->hasCSSClass('container'));
    }

    /** @test */
    public function container_fluid_creates_div_with_container_fluid_class(): void
    {
        $el = HtmlElement::containerFluid();
        $this->assertEquals('div', $el->getTag());
        $this->assertTrue($el->hasCSSClass('container-fluid'));
    }

    /** @test */
    public function row_creates_div_with_row_class(): void
    {
        $el = HtmlElement::row();
        $this->assertEquals('div', $el->getTag());
        $this->assertTrue($el->hasCSSClass('row'));
    }

    /** @test */
    public function column_with_no_args_creates_col_class(): void
    {
        $el = HtmlElement::column();
        $this->assertTrue($el->hasCSSClass('col'));
    }

    /** @test */
    public function column_with_width_creates_col_width_class(): void
    {
        $el = HtmlElement::column(6);
        $this->assertTrue($el->hasCSSClass('col-6'));
    }

    /** @test */
    public function column_with_offset_creates_offset_class(): void
    {
        $el = HtmlElement::column(4, 2);
        $this->assertTrue($el->hasCSSClass('col-4'));
        $this->assertTrue($el->hasCSSClass('offset-2'));
    }

    /** @test */
    public function column_with_zero_offset_does_not_add_offset_class(): void
    {
        $el = HtmlElement::column(6, 0);
        $this->assertFalse($el->hasCSSClass('offset-0'));
    }

    /** @test */
    public function column_responsive_creates_breakpoint_classes(): void
    {
        $el = HtmlElement::columnResponsive(['xs' => 12, 'md' => 6, 'lg' => 4]);
        $this->assertTrue($el->hasCSSClass('col-12'));
        $this->assertTrue($el->hasCSSClass('col-md-6'));
        $this->assertTrue($el->hasCSSClass('col-lg-4'));
    }

    // ============================================================================
    // MARGIN UTILITIES  (data-provider based)
    // ============================================================================

    /**
     * @test
     * @dataProvider marginMethodProvider
     */
    public function margin_methods_add_correct_class(string $method, int $value, string $expectedClass): void
    {
        $elem = HtmlElement::div();
        $result = HtmlElement::$method($elem, $value);
        $this->assertSame($elem, $result, "$method should return the same element");
        $this->assertTrue($elem->hasCSSClass($expectedClass), "$method should add $expectedClass");
    }

    public function marginMethodProvider(): array
    {
        return [
            'margin 3'           => ['applyMargin',           3, 'm-3'],
            'marginTop 2'        => ['applyMarginTop',        2, 'mt-2'],
            'marginBottom 4'     => ['applyMarginBottom',     4, 'mb-4'],
            'marginLeft 1'       => ['applyMarginLeft',       1, 'ml-1'],
            'marginRight 0'      => ['applyMarginRight',      0, 'mr-0'],
            'marginHorizontal 2' => ['applyMarginHorizontal', 2, 'mx-2'],
            'marginVertical 3'   => ['applyMarginVertical',   3, 'my-3'],
        ];
    }

    /** @test */
    public function apply_margin_auto_adds_mx_auto_class(): void
    {
        $elem = HtmlElement::div();
        $result = HtmlElement::applyMarginAuto($elem);
        $this->assertSame($elem, $result);
        $this->assertTrue($elem->hasCSSClass('mx-auto'));
    }

    // ============================================================================
    // PADDING UTILITIES (data-provider based)
    // ============================================================================

    /**
     * @test
     * @dataProvider paddingMethodProvider
     */
    public function padding_methods_add_correct_class(string $method, int $value, string $expectedClass): void
    {
        $elem = HtmlElement::div();
        $result = HtmlElement::$method($elem, $value);
        $this->assertSame($elem, $result);
        $this->assertTrue($elem->hasCSSClass($expectedClass));
    }

    public function paddingMethodProvider(): array
    {
        return [
            'padding 2'           => ['applyPadding',           2, 'p-2'],
            'paddingTop 1'        => ['applyPaddingTop',        1, 'pt-1'],
            'paddingBottom 3'     => ['applyPaddingBottom',     3, 'pb-3'],
            'paddingLeft 0'       => ['applyPaddingLeft',       0, 'pl-0'],
            'paddingRight 4'      => ['applyPaddingRight',      4, 'pr-4'],
            'paddingHorizontal 2' => ['applyPaddingHorizontal', 2, 'px-2'],
            'paddingVertical 5'   => ['applyPaddingVertical',   5, 'py-5'],
        ];
    }

    // ============================================================================
    // DISPLAY UTILITIES
    // ============================================================================

    /** @test */
    public function apply_display_adds_d_display_class(): void
    {
        $elem = HtmlElement::div();
        $result = HtmlElement::applyDisplay($elem, 'flex');
        $this->assertSame($elem, $result);
        $this->assertTrue($elem->hasCSSClass('d-flex'));
    }

    /** @test */
    public function apply_display_responsive_adds_breakpoint_classes(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyDisplayResponsive($elem, ['xs' => 'block', 'md' => 'flex', 'lg' => 'none']);
        $this->assertTrue($elem->hasCSSClass('d-block'));
        $this->assertTrue($elem->hasCSSClass('d-md-flex'));
        $this->assertTrue($elem->hasCSSClass('d-lg-none'));
    }

    /** @test */
    public function apply_hidden_adds_d_none_class(): void
    {
        $elem = HtmlElement::div();
        $result = HtmlElement::applyHidden($elem);
        $this->assertSame($elem, $result);
        $this->assertTrue($elem->hasCSSClass('d-none'));
    }

    /** @test */
    public function apply_visible_removes_d_none_class(): void
    {
        $elem = HtmlElement::div();
        $elem->addCSSClass('d-none');
        $result = HtmlElement::applyVisible($elem);
        $this->assertSame($elem, $result);
        $this->assertFalse($elem->hasCSSClass('d-none'));
    }

    // ============================================================================
    // SIZING UTILITIES (data-provider based)
    // ============================================================================

    /**
     * @test
     * @dataProvider sizingMethodProvider
     */
    public function sizing_methods_add_correct_class(string $method, int $value, string $expectedClass): void
    {
        $elem = HtmlElement::div();
        $result = HtmlElement::$method($elem, $value);
        $this->assertSame($elem, $result);
        $this->assertTrue($elem->hasCSSClass($expectedClass));
    }

    public function sizingMethodProvider(): array
    {
        return [
            'width 50'      => ['applyWidth',     50,  'w-50'],
            'height 100'    => ['applyHeight',    100, 'h-100'],
            'maxWidth 100'  => ['applyMaxWidth',  100, 'mw-100'],
            'maxHeight 100' => ['applyMaxHeight', 100, 'mh-100'],
        ];
    }

    // ============================================================================
    // FLEXBOX UTILITIES
    // ============================================================================

    /** @test */
    public function apply_flex_direction_adds_flex_direction_class(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyFlexDirection($elem, 'column');
        $this->assertTrue($elem->hasCSSClass('flex-column'));
    }

    /** @test */
    public function apply_flex_wrap_adds_flex_wrap_class(): void
    {
        $elem = HtmlElement::div();
        $result = HtmlElement::applyFlexWrap($elem);
        $this->assertSame($elem, $result);
        $this->assertTrue($elem->hasCSSClass('flex-wrap'));
    }

    /** @test */
    public function apply_justify_content_adds_class(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyJustifyContent($elem, 'center');
        $this->assertTrue($elem->hasCSSClass('justify-content-center'));
    }

    /** @test */
    public function apply_align_items_adds_class(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyAlignItems($elem, 'stretch');
        $this->assertTrue($elem->hasCSSClass('align-items-stretch'));
    }

    /** @test */
    public function apply_flex_grow_adds_flex_grow_1_class(): void
    {
        $elem = HtmlElement::div();
        $result = HtmlElement::applyFlexGrow($elem);
        $this->assertSame($elem, $result);
        $this->assertTrue($elem->hasCSSClass('flex-grow-1'));
    }

    /** @test */
    public function apply_flex_shrink_adds_flex_shrink_1_class(): void
    {
        $elem = HtmlElement::div();
        $result = HtmlElement::applyFlexShrink($elem);
        $this->assertSame($elem, $result);
        $this->assertTrue($elem->hasCSSClass('flex-shrink-1'));
    }

    // ============================================================================
    // TEXT ALIGNMENT
    // ============================================================================

    /** @test */
    public function apply_text_align_adds_text_alignment_class(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyTextAlign($elem, 'center');
        $this->assertTrue($elem->hasCSSClass('text-center'));
    }

    /** @test */
    public function apply_text_align_responsive_adds_breakpoint_classes(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyTextAlignResponsive($elem, ['xs' => 'left', 'md' => 'center', 'lg' => 'right']);
        $this->assertTrue($elem->hasCSSClass('text-left'));
        $this->assertTrue($elem->hasCSSClass('text-md-center'));
        $this->assertTrue($elem->hasCSSClass('text-lg-right'));
    }

    /** @test */
    public function apply_text_truncate_adds_text_truncate_class(): void
    {
        $elem = HtmlElement::div();
        $result = HtmlElement::applyTextTruncate($elem);
        $this->assertSame($elem, $result);
        $this->assertTrue($elem->hasCSSClass('text-truncate'));
    }

    // ============================================================================
    // OVERFLOW
    // ============================================================================

    /** @test */
    public function apply_overflow_adds_overflow_class(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyOverflow($elem, 'hidden');
        $this->assertTrue($elem->hasCSSClass('overflow-hidden'));
    }

    // ============================================================================
    // BORDERS
    // ============================================================================

    /** @test */
    public function apply_border_adds_border_class(): void
    {
        $elem = HtmlElement::div();
        $result = HtmlElement::applyBorder($elem);
        $this->assertSame($elem, $result);
        $this->assertTrue($elem->hasCSSClass('border'));
    }

    /** @test */
    public function apply_border_top_adds_border_top_class(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyBorderTop($elem);
        $this->assertTrue($elem->hasCSSClass('border-top'));
    }

    /** @test */
    public function apply_border_bottom_adds_border_bottom_class(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyBorderBottom($elem);
        $this->assertTrue($elem->hasCSSClass('border-bottom'));
    }

    /** @test */
    public function apply_border_left_adds_border_left_class(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyBorderLeft($elem);
        $this->assertTrue($elem->hasCSSClass('border-left'));
    }

    /** @test */
    public function apply_border_right_adds_border_right_class(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyBorderRight($elem);
        $this->assertTrue($elem->hasCSSClass('border-right'));
    }

    /** @test */
    public function apply_border_radius_default_adds_rounded_class(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyBorderRadius($elem);
        $this->assertTrue($elem->hasCSSClass('rounded'));
    }

    /** @test */
    public function apply_border_radius_circle_adds_rounded_circle_class(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyBorderRadius($elem, 'circle');
        $this->assertTrue($elem->hasCSSClass('rounded-circle'));
    }

    // ============================================================================
    // SHADOWS
    // ============================================================================

    /** @test */
    public function apply_shadow_default_adds_shadow_class(): void
    {
        $elem = HtmlElement::div();
        $result = HtmlElement::applyShadow($elem);
        $this->assertSame($elem, $result);
        $this->assertTrue($elem->hasCSSClass('shadow'));
    }

    /** @test */
    public function apply_shadow_sm_adds_shadow_sm_class(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyShadow($elem, 'sm');
        $this->assertTrue($elem->hasCSSClass('shadow-sm'));
    }

    /** @test */
    public function apply_shadow_lg_adds_shadow_lg_class(): void
    {
        $elem = HtmlElement::div();
        HtmlElement::applyShadow($elem, 'lg');
        $this->assertTrue($elem->hasCSSClass('shadow-lg'));
    }

    // ============================================================================
    // NON-SELF ELEMENT PASSTHROUGH (branch coverage)
    // ============================================================================

    /** @test */
    public function static_methods_return_non_self_element_unchanged(): void
    {
        $mock = $this->createMock(HtmlElementInterface::class);
        $mock->expects($this->never())->method($this->anything());

        $result = HtmlElement::applyMargin($mock, 3);
        $this->assertSame($mock, $result, 'Non-self instances should be returned unchanged');

        $result2 = HtmlElement::applyDisplay($mock, 'flex');
        $this->assertSame($mock, $result2);
    }
}
