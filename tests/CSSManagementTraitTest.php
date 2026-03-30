<?php
/**
 * Test CSSManagementTrait - FR-006
 * 
 * Tests for Enhanced CSS Class Management functionality.
 * Covers: batch operations, conditional classes, removal, toggling, deduplication
 * 
 * @author Kevin Fraser
 * @since 2026-03-27
 */

namespace Ksfraser\HTML\Tests;

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlDiv;
use Ksfraser\HTML\HtmlButton;
use Ksfraser\HTML\HtmlSpan;

class CSSManagementTraitTest extends TestCase
{
    private HtmlDiv $element;

    protected function setUp(): void
    {
        $this->element = new HtmlDiv();
    }

    // ===== HAPPY PATH TESTS =====

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testAddSingleCSSClassReturnsElement(): void
    {
        $result = $this->element->addCSSClass('btn');
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testAddSingleCSSClassRendersCorrectly(): void
    {
        $this->element->addCSSClass('btn');
        $this->assertStringContainsString('class="btn"', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testAddMultipleCSSClassesIndividually(): void
    {
        $this->element
            ->addCSSClass('btn')
            ->addCSSClass('btn-primary');
        
        $html = (string)$this->element;
        $this->assertStringContainsString('class=', $html);
        $this->assertStringContainsString('btn', $html);
        $this->assertStringContainsString('btn-primary', $html);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testAddCSSClassesBatchOperation(): void
    {
        $classes = ['btn', 'btn-primary', 'btn-lg'];
        $this->element->addCSSClasses($classes);
        
        $html = (string)$this->element;
        foreach ($classes as $class) {
            $this->assertStringContainsString($class, $html);
        }
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testAddCSSClassesBatchReturnsElement(): void
    {
        $result = $this->element->addCSSClasses(['btn', 'primary']);
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testConditionalCSSClassWithTrueCondition(): void
    {
        $this->element->addCSSClass('active', true);
        $this->assertStringContainsString('active', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testConditionalCSSClassWithFalseCondition(): void
    {
        $this->element->addCSSClass('active', false);
        $this->assertStringNotContainsString('active', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testConditionalCSSClassWithExpressionTrue(): void
    {
        $isButtonPrimary = true;
        $this->element->addCSSClass('primary', $isButtonPrimary);
        $this->assertStringContainsString('primary', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testConditionalCSSClassWithExpressionFalse(): void
    {
        $isDisabled = false;
        $this->element->addCSSClass('disabled', $isDisabled);
        $this->assertStringNotContainsString('disabled', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testRemoveCSSClassRemovesPresent(): void
    {
        $this->element->addCSSClass('btn')->addCSSClass('primary');
        $this->element->removeCSSClass('primary');
        
        $html = (string)$this->element;
        $this->assertStringContainsString('btn', $html);
        $this->assertStringNotContainsString('primary', $html);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testRemoveCSSClassReturnsElement(): void
    {
        $this->element->addCSSClass('btn');
        $result = $this->element->removeCSSClass('btn');
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testRemoveNonExistentCSSClassDoesNotError(): void
    {
        $this->element->addCSSClass('btn');
        $result = $this->element->removeCSSClass('nonexistent');
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testToggleCSSClassOnAdds(): void
    {
        $this->element->toggleCSSClass('active');
        $this->assertStringContainsString('active', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testToggleCSSClassOnRemoves(): void
    {
        $this->element->addCSSClass('active');
        $this->element->toggleCSSClass('active');
        $this->assertStringNotContainsString('active', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testToggleCSSClassWithForceTrue(): void
    {
        $this->element->toggleCSSClass('active', true);
        $this->assertStringContainsString('active', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testToggleCSSClassWithForceFalse(): void
    {
        $this->element->addCSSClass('active');
        $this->element->toggleCSSClass('active', false);
        $this->assertStringNotContainsString('active', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testToggleCSSClassReturnsElement(): void
    {
        $result = $this->element->toggleCSSClass('active');
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testHasCSSClassReturnsTrueWhenPresent(): void
    {
        $this->element->addCSSClass('btn');
        $this->assertTrue($this->element->hasCSSClass('btn'));
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testHasCSSClassReturnsFalseWhenAbsent(): void
    {
        $this->element->addCSSClass('btn');
        $this->assertFalse($this->element->hasCSSClass('primary'));
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testGetCSSClassesReturnsArray(): void
    {
        $this->element->addCSSClasses(['btn', 'primary', 'lg']);
        $classes = $this->element->getCSSClasses();
        
        $this->assertIsArray($classes);
        $this->assertCount(3, $classes);
        $this->assertContains('btn', $classes);
        $this->assertContains('primary', $classes);
        $this->assertContains('lg', $classes);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     */
    public function testGetCSSClassesEmpty(): void
    {
        $classes = $this->element->getCSSClasses();
        $this->assertIsArray($classes);
        $this->assertCount(0, $classes);
    }

    // ===== DEDUPLICATION TESTS =====

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group deduplication
     */
    public function testAddDuplicateCSSClassDeduplicated(): void
    {
        $this->element->addCSSClass('btn');
        $this->element->addCSSClass('btn');
        
        $classes = $this->element->getCSSClasses();
        $btnOccurrences = count(array_filter($classes, fn($c) => $c === 'btn'));
        
        $this->assertEquals(1, $btnOccurrences, 'Duplicate class should appear only once');
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group deduplication
     */
    public function testBatchAddWithDuplicatesDeduplicated(): void
    {
        $this->element->addCSSClasses(['btn', 'primary', 'btn']);
        $classes = $this->element->getCSSClasses();
        
        $this->assertCount(2, $classes);
        $this->assertContains('btn', $classes);
        $this->assertContains('primary', $classes);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group deduplication
     */
    public function testExistingAndNewClassDeduplicated(): void
    {
        $this->element->addCSSClass('btn');
        $this->element->addCSSClasses(['primary', 'btn', 'lg']);
        
        $classes = $this->element->getCSSClasses();
        $this->assertCount(3, $classes);
    }

    // ===== EDGE CASE TESTS =====

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group edge-cases
     */
    public function testAddEmptyStringIgnored(): void
    {
        $this->element->addCSSClass('');
        $classes = $this->element->getCSSClasses();
        $this->assertCount(0, $classes);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group edge-cases
     */
    public function testAddWhitespaceOnlyIgnored(): void
    {
        $this->element->addCSSClass('   ');
        $classes = $this->element->getCSSClasses();
        $this->assertCount(0, $classes);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group edge-cases
     */
    public function testAddCSSClassWithLeadingTrailingWhitespace(): void
    {
        $this->element->addCSSClass('  btn  ');
        $classes = $this->element->getCSSClasses();
        
        $this->assertCount(1, $classes);
        $this->assertContains('btn', $classes);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group edge-cases
     */
    public function testAddValidCSSClassWithHyphens(): void
    {
        $this->element->addCSSClass('btn-primary-lg');
        $this->assertTrue($this->element->hasCSSClass('btn-primary-lg'));
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group edge-cases
     */
    public function testAddValidCSSClassWithNumbers(): void
    {
        $this->element->addCSSClass('col-md-6');
        $this->assertTrue($this->element->hasCSSClass('col-md-6'));
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group edge-cases
     */
    public function testAddValidCSSClassWithUnderscores(): void
    {
        $this->element->addCSSClass('btn_active_state');
        $this->assertTrue($this->element->hasCSSClass('btn_active_state'));
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group edge-cases
     */
    public function testBatchAddWithEmptyStrings(): void
    {
        $this->element->addCSSClasses(['btn', '', 'primary', '  ']);
        $classes = $this->element->getCSSClasses();
        
        $this->assertCount(2, $classes);
        $this->assertContains('btn', $classes);
        $this->assertContains('primary', $classes);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group edge-cases
     */
    public function testLongCSSClassNameAccepted(): void
    {
        $longClass = 'my-incredibly-long-class-name-that-should-still-work-' . str_repeat('x', 1000);
        $this->element->addCSSClass($longClass);
        $this->assertTrue($this->element->hasCSSClass($longClass));
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group edge-cases
     */
    public function testManyClassesPerformance(): void
    {
        $classes = [];
        for ($i = 0; $i < 100; $i++) {
            $classes[] = "class-{$i}";
        }
        
        $start = microtime(true);
        $this->element->addCSSClasses($classes);
        $elapsed = microtime(true) - $start;
        
        // Should complete in less than 100ms
        $this->assertLessThan(0.1, $elapsed);
    }

    // ===== ERROR CONDITION TESTS =====

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group error-conditions
     */
    public function testAddInvalidCSSClassWithSpaceThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->element->addCSSClass('btn primary');
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group error-conditions
     */
    public function testAddInvalidCSSClassWithCommaThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->element->addCSSClass('btn,primary');
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group error-conditions
     */
    public function testAddInvalidCSSClassWithSpecialCharacterThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->element->addCSSClass('btn@primary');
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group error-conditions
     */
    public function testAddInvalidCSSClassWithSemicolonThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->element->addCSSClass('btn;primary');
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group error-conditions
     */
    public function testBatchAddWithInvalidClassesThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->element->addCSSClasses(['btn', 'invalid@class', 'primary']);
    }

    // ===== INTEGRATION TESTS =====

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group integration
     */
    public function testCSSPreservedWithOtherAttributes(): void
    {
        $this->element
            ->addCSSClass('btn')
            ->setAttribute('id', 'my-button')
            ->addCSSClass('primary')
            ->setAttribute('type', 'submit');
        
        $html = (string)$this->element;
        $this->assertStringContainsString('class=', $html);
        $this->assertStringContainsString('id="my-button"', $html);
        $this->assertStringContainsString('type="submit"', $html);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group integration
     */
    public function testMultipleCSSOperationsChained(): void
    {
        $result = $this->element
            ->addCSSClass('container')
            ->addCSSClasses(['row', 'active'])
            ->removeCSSClass('row')
            ->toggleCSSClass('pending')
            ->addCSSClass('visible', true);
        
        $this->assertSame($this->element, $result);
        $classes = $this->element->getCSSClasses();
        
        $this->assertContains('container', $classes);
        $this->assertContains('active', $classes);
        $this->assertContains('pending', $classes);
        $this->assertContains('visible', $classes);
        $this->assertNotContains('row', $classes);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group integration
     */
    public function testCSSWithNestedElements(): void
    {
        $button = new HtmlButton('Click me');
        $button->addCSSClass('btn-primary');
        
        $this->element
            ->addCSSClass('button-container')
            ->addNested($button);
        
        $html = (string)$this->element;
        $this->assertStringContainsString('button-container', $html);
        $this->assertStringContainsString('btn-primary', $html);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group integration
     */
    public function testCSSWithBootstrapPattern(): void
    {
        $button = new HtmlButton('Submit');
        $button
            ->addCSSClasses(['btn', 'btn-lg', 'btn-primary'])
            ->setAttribute('type', 'submit');
        
        $html = (string)$button;
        foreach (['btn', 'btn-lg', 'btn-primary'] as $class) {
            $this->assertStringContainsString($class, $html);
        }
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group integration
     */
    public function testCSSWithTailwindPattern(): void
    {
        $div = new HtmlDiv();
        $div->addCSSClasses([
            'flex', 'justify-center', 'items-center',
            'w-full', 'h-screen',
            'bg-gray-100', 'text-gray-800'
        ]);
        
        $html = (string)$div;
        $this->assertStringContainsString('flex', $html);
        $this->assertStringContainsString('justify-center', $html);
        $this->assertStringContainsString('bg-gray-100', $html);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group integration
     */
    public function testConditionalCSSInComplexScenario(): void
    {
        $isActive = true;
        $isDisabled = false;
        $isDarkTheme = true;
        
        $this->element
            ->addCSSClass('nav-item')
            ->addCSSClass('active', $isActive)
            ->addCSSClass('disabled', $isDisabled)
            ->addCSSClass('dark-theme', $isDarkTheme);
        
        $classes = $this->element->getCSSClasses();
        $this->assertContains('nav-item', $classes);
        $this->assertContains('active', $classes);
        $this->assertContains('dark-theme', $classes);
        $this->assertNotContains('disabled', $classes);
    }

    // ===== REGRESSION TESTS =====

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group regression
     */
    public function testExistingSetAttributeStillWorks(): void
    {
        $this->element->setAttribute('class', 'btn');
        $this->assertStringContainsString('class="btn"', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group regression
     */
    public function testExistingAddAttributeStillWorks(): void
    {
        $this->element->addAttribute('class', 'btn');
        $this->assertStringContainsString('class="btn"', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group regression
     */
    public function testExistingAddCSSClassStillWorks(): void
    {
        $this->element->addCSSClass('btn');
        $this->assertStringContainsString('class="btn"', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group regression
     */
    public function testBackwardCompatibilityWithSetAttributeClass(): void
    {
        $this->element->setAttribute('class', 'old-class');
        $this->element->addCSSClass('new-class');
        
        $classes = $this->element->getCSSClasses();
        $this->assertContains('old-class', $classes);
        $this->assertContains('new-class', $classes);
    }
}
