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

/**
 * class CSSManagementTraitTest
 *
 * @since 1.0.5 2026-03-30
 */
/**
 * CSSManagementTraitTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class CSSManagementTraitTest extends TestCase
{
    private HtmlDiv $element;

/**
 * setUp
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    protected /**
 * setUp
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
function setUp(): void
    {
        $this->element = new HtmlDiv();
    }

    // ===== HAPPY PATH TESTS =====

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddSingleCSSClassReturnsElement
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddSingleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testAddSingleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testAddSingleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testAddSingleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testAddSingleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testAddSingleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testAddSingleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testAddSingleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testAddSingleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testAddSingleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testAddSingleCSSClassReturnsElement
 *
 * @return void
 */
function testAddSingleCSSClassReturnsElement(): void
    {
        $result = $this->element->addCSSClass('btn');
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddSingleCSSClassRendersCorrectly
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddSingleCSSClassRendersCorrectly
 *
 * @return void
 */
/**
 * testAddSingleCSSClassRendersCorrectly
 *
 * @return void
 */
/**
 * testAddSingleCSSClassRendersCorrectly
 *
 * @return void
 */
/**
 * testAddSingleCSSClassRendersCorrectly
 *
 * @return void
 */
/**
 * testAddSingleCSSClassRendersCorrectly
 *
 * @return void
 */
/**
 * testAddSingleCSSClassRendersCorrectly
 *
 * @return void
 */
/**
 * testAddSingleCSSClassRendersCorrectly
 *
 * @return void
 */
/**
 * testAddSingleCSSClassRendersCorrectly
 *
 * @return void
 */
/**
 * testAddSingleCSSClassRendersCorrectly
 *
 * @return void
 */
/**
 * testAddSingleCSSClassRendersCorrectly
 *
 * @return void
 */
/**
 * testAddSingleCSSClassRendersCorrectly
 *
 * @return void
 */
function testAddSingleCSSClassRendersCorrectly(): void
    {
        $this->element->addCSSClass('btn');
        $this->assertStringContainsString('class="btn"', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddMultipleCSSClassesIndividually
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddMultipleCSSClassesIndividually
 *
 * @return void
 */
/**
 * testAddMultipleCSSClassesIndividually
 *
 * @return void
 */
/**
 * testAddMultipleCSSClassesIndividually
 *
 * @return void
 */
/**
 * testAddMultipleCSSClassesIndividually
 *
 * @return void
 */
/**
 * testAddMultipleCSSClassesIndividually
 *
 * @return void
 */
/**
 * testAddMultipleCSSClassesIndividually
 *
 * @return void
 */
/**
 * testAddMultipleCSSClassesIndividually
 *
 * @return void
 */
/**
 * testAddMultipleCSSClassesIndividually
 *
 * @return void
 */
/**
 * testAddMultipleCSSClassesIndividually
 *
 * @return void
 */
/**
 * testAddMultipleCSSClassesIndividually
 *
 * @return void
 */
/**
 * testAddMultipleCSSClassesIndividually
 *
 * @return void
 */
function testAddMultipleCSSClassesIndividually(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddCSSClassesBatchOperation
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddCSSClassesBatchOperation
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchOperation
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchOperation
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchOperation
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchOperation
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchOperation
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchOperation
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchOperation
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchOperation
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchOperation
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchOperation
 *
 * @return void
 */
function testAddCSSClassesBatchOperation(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddCSSClassesBatchReturnsElement
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddCSSClassesBatchReturnsElement
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchReturnsElement
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchReturnsElement
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchReturnsElement
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchReturnsElement
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchReturnsElement
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchReturnsElement
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchReturnsElement
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchReturnsElement
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchReturnsElement
 *
 * @return void
 */
/**
 * testAddCSSClassesBatchReturnsElement
 *
 * @return void
 */
function testAddCSSClassesBatchReturnsElement(): void
    {
        $result = $this->element->addCSSClasses(['btn', 'primary']);
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testConditionalCSSClassWithTrueCondition
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testConditionalCSSClassWithTrueCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithTrueCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithTrueCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithTrueCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithTrueCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithTrueCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithTrueCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithTrueCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithTrueCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithTrueCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithTrueCondition
 *
 * @return void
 */
function testConditionalCSSClassWithTrueCondition(): void
    {
        $this->element->addCSSClass('active', true);
        $this->assertStringContainsString('active', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testConditionalCSSClassWithFalseCondition
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testConditionalCSSClassWithFalseCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithFalseCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithFalseCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithFalseCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithFalseCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithFalseCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithFalseCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithFalseCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithFalseCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithFalseCondition
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithFalseCondition
 *
 * @return void
 */
function testConditionalCSSClassWithFalseCondition(): void
    {
        $this->element->addCSSClass('active', false);
        $this->assertStringNotContainsString('active', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testConditionalCSSClassWithExpressionTrue
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionTrue
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionTrue
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionTrue
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionTrue
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionTrue
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionTrue
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionTrue
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionTrue
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionTrue
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionTrue
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionTrue
 *
 * @return void
 */
function testConditionalCSSClassWithExpressionTrue(): void
    {
        $isButtonPrimary = true;
        $this->element->addCSSClass('primary', $isButtonPrimary);
        $this->assertStringContainsString('primary', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testConditionalCSSClassWithExpressionFalse
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionFalse
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionFalse
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionFalse
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionFalse
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionFalse
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionFalse
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionFalse
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionFalse
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionFalse
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionFalse
 *
 * @return void
 */
/**
 * testConditionalCSSClassWithExpressionFalse
 *
 * @return void
 */
function testConditionalCSSClassWithExpressionFalse(): void
    {
        $isDisabled = false;
        $this->element->addCSSClass('disabled', $isDisabled);
        $this->assertStringNotContainsString('disabled', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testRemoveCSSClassRemovesPresent
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testRemoveCSSClassRemovesPresent
 *
 * @return void
 */
/**
 * testRemoveCSSClassRemovesPresent
 *
 * @return void
 */
/**
 * testRemoveCSSClassRemovesPresent
 *
 * @return void
 */
/**
 * testRemoveCSSClassRemovesPresent
 *
 * @return void
 */
/**
 * testRemoveCSSClassRemovesPresent
 *
 * @return void
 */
/**
 * testRemoveCSSClassRemovesPresent
 *
 * @return void
 */
/**
 * testRemoveCSSClassRemovesPresent
 *
 * @return void
 */
/**
 * testRemoveCSSClassRemovesPresent
 *
 * @return void
 */
/**
 * testRemoveCSSClassRemovesPresent
 *
 * @return void
 */
/**
 * testRemoveCSSClassRemovesPresent
 *
 * @return void
 */
/**
 * testRemoveCSSClassRemovesPresent
 *
 * @return void
 */
function testRemoveCSSClassRemovesPresent(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testRemoveCSSClassReturnsElement
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testRemoveCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testRemoveCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testRemoveCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testRemoveCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testRemoveCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testRemoveCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testRemoveCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testRemoveCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testRemoveCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testRemoveCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testRemoveCSSClassReturnsElement
 *
 * @return void
 */
function testRemoveCSSClassReturnsElement(): void
    {
        $this->element->addCSSClass('btn');
        $result = $this->element->removeCSSClass('btn');
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testRemoveNonExistentCSSClassDoesNotError
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testRemoveNonExistentCSSClassDoesNotError
 *
 * @return void
 */
/**
 * testRemoveNonExistentCSSClassDoesNotError
 *
 * @return void
 */
/**
 * testRemoveNonExistentCSSClassDoesNotError
 *
 * @return void
 */
/**
 * testRemoveNonExistentCSSClassDoesNotError
 *
 * @return void
 */
/**
 * testRemoveNonExistentCSSClassDoesNotError
 *
 * @return void
 */
/**
 * testRemoveNonExistentCSSClassDoesNotError
 *
 * @return void
 */
/**
 * testRemoveNonExistentCSSClassDoesNotError
 *
 * @return void
 */
/**
 * testRemoveNonExistentCSSClassDoesNotError
 *
 * @return void
 */
/**
 * testRemoveNonExistentCSSClassDoesNotError
 *
 * @return void
 */
/**
 * testRemoveNonExistentCSSClassDoesNotError
 *
 * @return void
 */
/**
 * testRemoveNonExistentCSSClassDoesNotError
 *
 * @return void
 */
function testRemoveNonExistentCSSClassDoesNotError(): void
    {
        $this->element->addCSSClass('btn');
        $result = $this->element->removeCSSClass('nonexistent');
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testToggleCSSClassOnAdds
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testToggleCSSClassOnAdds
 *
 * @return void
 */
/**
 * testToggleCSSClassOnAdds
 *
 * @return void
 */
/**
 * testToggleCSSClassOnAdds
 *
 * @return void
 */
/**
 * testToggleCSSClassOnAdds
 *
 * @return void
 */
/**
 * testToggleCSSClassOnAdds
 *
 * @return void
 */
/**
 * testToggleCSSClassOnAdds
 *
 * @return void
 */
/**
 * testToggleCSSClassOnAdds
 *
 * @return void
 */
/**
 * testToggleCSSClassOnAdds
 *
 * @return void
 */
/**
 * testToggleCSSClassOnAdds
 *
 * @return void
 */
/**
 * testToggleCSSClassOnAdds
 *
 * @return void
 */
/**
 * testToggleCSSClassOnAdds
 *
 * @return void
 */
function testToggleCSSClassOnAdds(): void
    {
        $this->element->toggleCSSClass('active');
        $this->assertStringContainsString('active', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testToggleCSSClassOnRemoves
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testToggleCSSClassOnRemoves
 *
 * @return void
 */
/**
 * testToggleCSSClassOnRemoves
 *
 * @return void
 */
/**
 * testToggleCSSClassOnRemoves
 *
 * @return void
 */
/**
 * testToggleCSSClassOnRemoves
 *
 * @return void
 */
/**
 * testToggleCSSClassOnRemoves
 *
 * @return void
 */
/**
 * testToggleCSSClassOnRemoves
 *
 * @return void
 */
/**
 * testToggleCSSClassOnRemoves
 *
 * @return void
 */
/**
 * testToggleCSSClassOnRemoves
 *
 * @return void
 */
/**
 * testToggleCSSClassOnRemoves
 *
 * @return void
 */
/**
 * testToggleCSSClassOnRemoves
 *
 * @return void
 */
/**
 * testToggleCSSClassOnRemoves
 *
 * @return void
 */
function testToggleCSSClassOnRemoves(): void
    {
        $this->element->addCSSClass('active');
        $this->element->toggleCSSClass('active');
        $this->assertStringNotContainsString('active', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testToggleCSSClassWithForceTrue
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testToggleCSSClassWithForceTrue
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceTrue
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceTrue
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceTrue
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceTrue
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceTrue
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceTrue
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceTrue
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceTrue
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceTrue
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceTrue
 *
 * @return void
 */
function testToggleCSSClassWithForceTrue(): void
    {
        $this->element->toggleCSSClass('active', true);
        $this->assertStringContainsString('active', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testToggleCSSClassWithForceFalse
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testToggleCSSClassWithForceFalse
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceFalse
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceFalse
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceFalse
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceFalse
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceFalse
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceFalse
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceFalse
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceFalse
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceFalse
 *
 * @return void
 */
/**
 * testToggleCSSClassWithForceFalse
 *
 * @return void
 */
function testToggleCSSClassWithForceFalse(): void
    {
        $this->element->addCSSClass('active');
        $this->element->toggleCSSClass('active', false);
        $this->assertStringNotContainsString('active', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testToggleCSSClassReturnsElement
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testToggleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testToggleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testToggleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testToggleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testToggleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testToggleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testToggleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testToggleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testToggleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testToggleCSSClassReturnsElement
 *
 * @return void
 */
/**
 * testToggleCSSClassReturnsElement
 *
 * @return void
 */
function testToggleCSSClassReturnsElement(): void
    {
        $result = $this->element->toggleCSSClass('active');
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testHasCSSClassReturnsTrueWhenPresent
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testHasCSSClassReturnsTrueWhenPresent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsTrueWhenPresent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsTrueWhenPresent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsTrueWhenPresent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsTrueWhenPresent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsTrueWhenPresent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsTrueWhenPresent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsTrueWhenPresent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsTrueWhenPresent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsTrueWhenPresent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsTrueWhenPresent
 *
 * @return void
 */
function testHasCSSClassReturnsTrueWhenPresent(): void
    {
        $this->element->addCSSClass('btn');
        $this->assertTrue($this->element->hasCSSClass('btn'));
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testHasCSSClassReturnsFalseWhenAbsent
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testHasCSSClassReturnsFalseWhenAbsent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsFalseWhenAbsent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsFalseWhenAbsent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsFalseWhenAbsent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsFalseWhenAbsent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsFalseWhenAbsent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsFalseWhenAbsent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsFalseWhenAbsent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsFalseWhenAbsent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsFalseWhenAbsent
 *
 * @return void
 */
/**
 * testHasCSSClassReturnsFalseWhenAbsent
 *
 * @return void
 */
function testHasCSSClassReturnsFalseWhenAbsent(): void
    {
        $this->element->addCSSClass('btn');
        $this->assertFalse($this->element->hasCSSClass('primary'));
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetCSSClassesReturnsArray
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testGetCSSClassesReturnsArray
 *
 * @return void
 */
/**
 * testGetCSSClassesReturnsArray
 *
 * @return void
 */
/**
 * testGetCSSClassesReturnsArray
 *
 * @return void
 */
/**
 * testGetCSSClassesReturnsArray
 *
 * @return void
 */
/**
 * testGetCSSClassesReturnsArray
 *
 * @return void
 */
/**
 * testGetCSSClassesReturnsArray
 *
 * @return void
 */
/**
 * testGetCSSClassesReturnsArray
 *
 * @return void
 */
/**
 * testGetCSSClassesReturnsArray
 *
 * @return void
 */
/**
 * testGetCSSClassesReturnsArray
 *
 * @return void
 */
/**
 * testGetCSSClassesReturnsArray
 *
 * @return void
 */
/**
 * testGetCSSClassesReturnsArray
 *
 * @return void
 */
function testGetCSSClassesReturnsArray(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetCSSClassesEmpty
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testGetCSSClassesEmpty
 *
 * @return void
 */
/**
 * testGetCSSClassesEmpty
 *
 * @return void
 */
/**
 * testGetCSSClassesEmpty
 *
 * @return void
 */
/**
 * testGetCSSClassesEmpty
 *
 * @return void
 */
/**
 * testGetCSSClassesEmpty
 *
 * @return void
 */
/**
 * testGetCSSClassesEmpty
 *
 * @return void
 */
/**
 * testGetCSSClassesEmpty
 *
 * @return void
 */
/**
 * testGetCSSClassesEmpty
 *
 * @return void
 */
/**
 * testGetCSSClassesEmpty
 *
 * @return void
 */
/**
 * testGetCSSClassesEmpty
 *
 * @return void
 */
/**
 * testGetCSSClassesEmpty
 *
 * @return void
 */
function testGetCSSClassesEmpty(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddDuplicateCSSClassDeduplicated
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddDuplicateCSSClassDeduplicated
 *
 * @return void
 */
/**
 * testAddDuplicateCSSClassDeduplicated
 *
 * @return void
 */
/**
 * testAddDuplicateCSSClassDeduplicated
 *
 * @return void
 */
/**
 * testAddDuplicateCSSClassDeduplicated
 *
 * @return void
 */
/**
 * testAddDuplicateCSSClassDeduplicated
 *
 * @return void
 */
/**
 * testAddDuplicateCSSClassDeduplicated
 *
 * @return void
 */
/**
 * testAddDuplicateCSSClassDeduplicated
 *
 * @return void
 */
/**
 * testAddDuplicateCSSClassDeduplicated
 *
 * @return void
 */
/**
 * testAddDuplicateCSSClassDeduplicated
 *
 * @return void
 */
/**
 * testAddDuplicateCSSClassDeduplicated
 *
 * @return void
 */
/**
 * testAddDuplicateCSSClassDeduplicated
 *
 * @return void
 */
function testAddDuplicateCSSClassDeduplicated(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testBatchAddWithDuplicatesDeduplicated
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testBatchAddWithDuplicatesDeduplicated
 *
 * @return void
 */
/**
 * testBatchAddWithDuplicatesDeduplicated
 *
 * @return void
 */
/**
 * testBatchAddWithDuplicatesDeduplicated
 *
 * @return void
 */
/**
 * testBatchAddWithDuplicatesDeduplicated
 *
 * @return void
 */
/**
 * testBatchAddWithDuplicatesDeduplicated
 *
 * @return void
 */
/**
 * testBatchAddWithDuplicatesDeduplicated
 *
 * @return void
 */
/**
 * testBatchAddWithDuplicatesDeduplicated
 *
 * @return void
 */
/**
 * testBatchAddWithDuplicatesDeduplicated
 *
 * @return void
 */
/**
 * testBatchAddWithDuplicatesDeduplicated
 *
 * @return void
 */
/**
 * testBatchAddWithDuplicatesDeduplicated
 *
 * @return void
 */
/**
 * testBatchAddWithDuplicatesDeduplicated
 *
 * @return void
 */
function testBatchAddWithDuplicatesDeduplicated(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testExistingAndNewClassDeduplicated
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testExistingAndNewClassDeduplicated
 *
 * @return void
 */
/**
 * testExistingAndNewClassDeduplicated
 *
 * @return void
 */
/**
 * testExistingAndNewClassDeduplicated
 *
 * @return void
 */
/**
 * testExistingAndNewClassDeduplicated
 *
 * @return void
 */
/**
 * testExistingAndNewClassDeduplicated
 *
 * @return void
 */
/**
 * testExistingAndNewClassDeduplicated
 *
 * @return void
 */
/**
 * testExistingAndNewClassDeduplicated
 *
 * @return void
 */
/**
 * testExistingAndNewClassDeduplicated
 *
 * @return void
 */
/**
 * testExistingAndNewClassDeduplicated
 *
 * @return void
 */
/**
 * testExistingAndNewClassDeduplicated
 *
 * @return void
 */
/**
 * testExistingAndNewClassDeduplicated
 *
 * @return void
 */
function testExistingAndNewClassDeduplicated(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddEmptyStringIgnored
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddEmptyStringIgnored
 *
 * @return void
 */
/**
 * testAddEmptyStringIgnored
 *
 * @return void
 */
/**
 * testAddEmptyStringIgnored
 *
 * @return void
 */
/**
 * testAddEmptyStringIgnored
 *
 * @return void
 */
/**
 * testAddEmptyStringIgnored
 *
 * @return void
 */
/**
 * testAddEmptyStringIgnored
 *
 * @return void
 */
/**
 * testAddEmptyStringIgnored
 *
 * @return void
 */
/**
 * testAddEmptyStringIgnored
 *
 * @return void
 */
/**
 * testAddEmptyStringIgnored
 *
 * @return void
 */
/**
 * testAddEmptyStringIgnored
 *
 * @return void
 */
/**
 * testAddEmptyStringIgnored
 *
 * @return void
 */
function testAddEmptyStringIgnored(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddWhitespaceOnlyIgnored
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddWhitespaceOnlyIgnored
 *
 * @return void
 */
/**
 * testAddWhitespaceOnlyIgnored
 *
 * @return void
 */
/**
 * testAddWhitespaceOnlyIgnored
 *
 * @return void
 */
/**
 * testAddWhitespaceOnlyIgnored
 *
 * @return void
 */
/**
 * testAddWhitespaceOnlyIgnored
 *
 * @return void
 */
/**
 * testAddWhitespaceOnlyIgnored
 *
 * @return void
 */
/**
 * testAddWhitespaceOnlyIgnored
 *
 * @return void
 */
/**
 * testAddWhitespaceOnlyIgnored
 *
 * @return void
 */
/**
 * testAddWhitespaceOnlyIgnored
 *
 * @return void
 */
/**
 * testAddWhitespaceOnlyIgnored
 *
 * @return void
 */
/**
 * testAddWhitespaceOnlyIgnored
 *
 * @return void
 */
function testAddWhitespaceOnlyIgnored(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddCSSClassWithLeadingTrailingWhitespace
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddCSSClassWithLeadingTrailingWhitespace
 *
 * @return void
 */
/**
 * testAddCSSClassWithLeadingTrailingWhitespace
 *
 * @return void
 */
/**
 * testAddCSSClassWithLeadingTrailingWhitespace
 *
 * @return void
 */
/**
 * testAddCSSClassWithLeadingTrailingWhitespace
 *
 * @return void
 */
/**
 * testAddCSSClassWithLeadingTrailingWhitespace
 *
 * @return void
 */
/**
 * testAddCSSClassWithLeadingTrailingWhitespace
 *
 * @return void
 */
/**
 * testAddCSSClassWithLeadingTrailingWhitespace
 *
 * @return void
 */
/**
 * testAddCSSClassWithLeadingTrailingWhitespace
 *
 * @return void
 */
/**
 * testAddCSSClassWithLeadingTrailingWhitespace
 *
 * @return void
 */
/**
 * testAddCSSClassWithLeadingTrailingWhitespace
 *
 * @return void
 */
/**
 * testAddCSSClassWithLeadingTrailingWhitespace
 *
 * @return void
 */
function testAddCSSClassWithLeadingTrailingWhitespace(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddValidCSSClassWithHyphens
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddValidCSSClassWithHyphens
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithHyphens
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithHyphens
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithHyphens
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithHyphens
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithHyphens
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithHyphens
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithHyphens
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithHyphens
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithHyphens
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithHyphens
 *
 * @return void
 */
function testAddValidCSSClassWithHyphens(): void
    {
        $this->element->addCSSClass('btn-primary-lg');
        $this->assertTrue($this->element->hasCSSClass('btn-primary-lg'));
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddValidCSSClassWithNumbers
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddValidCSSClassWithNumbers
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithNumbers
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithNumbers
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithNumbers
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithNumbers
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithNumbers
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithNumbers
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithNumbers
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithNumbers
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithNumbers
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithNumbers
 *
 * @return void
 */
function testAddValidCSSClassWithNumbers(): void
    {
        $this->element->addCSSClass('col-md-6');
        $this->assertTrue($this->element->hasCSSClass('col-md-6'));
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddValidCSSClassWithUnderscores
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddValidCSSClassWithUnderscores
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithUnderscores
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithUnderscores
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithUnderscores
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithUnderscores
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithUnderscores
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithUnderscores
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithUnderscores
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithUnderscores
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithUnderscores
 *
 * @return void
 */
/**
 * testAddValidCSSClassWithUnderscores
 *
 * @return void
 */
function testAddValidCSSClassWithUnderscores(): void
    {
        $this->element->addCSSClass('btn_active_state');
        $this->assertTrue($this->element->hasCSSClass('btn_active_state'));
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testBatchAddWithEmptyStrings
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testBatchAddWithEmptyStrings
 *
 * @return void
 */
/**
 * testBatchAddWithEmptyStrings
 *
 * @return void
 */
/**
 * testBatchAddWithEmptyStrings
 *
 * @return void
 */
/**
 * testBatchAddWithEmptyStrings
 *
 * @return void
 */
/**
 * testBatchAddWithEmptyStrings
 *
 * @return void
 */
/**
 * testBatchAddWithEmptyStrings
 *
 * @return void
 */
/**
 * testBatchAddWithEmptyStrings
 *
 * @return void
 */
/**
 * testBatchAddWithEmptyStrings
 *
 * @return void
 */
/**
 * testBatchAddWithEmptyStrings
 *
 * @return void
 */
/**
 * testBatchAddWithEmptyStrings
 *
 * @return void
 */
/**
 * testBatchAddWithEmptyStrings
 *
 * @return void
 */
function testBatchAddWithEmptyStrings(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testLongCSSClassNameAccepted
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testLongCSSClassNameAccepted
 *
 * @return void
 */
/**
 * testLongCSSClassNameAccepted
 *
 * @return void
 */
/**
 * testLongCSSClassNameAccepted
 *
 * @return void
 */
/**
 * testLongCSSClassNameAccepted
 *
 * @return void
 */
/**
 * testLongCSSClassNameAccepted
 *
 * @return void
 */
/**
 * testLongCSSClassNameAccepted
 *
 * @return void
 */
/**
 * testLongCSSClassNameAccepted
 *
 * @return void
 */
/**
 * testLongCSSClassNameAccepted
 *
 * @return void
 */
/**
 * testLongCSSClassNameAccepted
 *
 * @return void
 */
/**
 * testLongCSSClassNameAccepted
 *
 * @return void
 */
/**
 * testLongCSSClassNameAccepted
 *
 * @return void
 */
function testLongCSSClassNameAccepted(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testManyClassesPerformance
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testManyClassesPerformance
 *
 * @return void
 */
/**
 * testManyClassesPerformance
 *
 * @return void
 */
/**
 * testManyClassesPerformance
 *
 * @return void
 */
/**
 * testManyClassesPerformance
 *
 * @return void
 */
/**
 * testManyClassesPerformance
 *
 * @return void
 */
/**
 * testManyClassesPerformance
 *
 * @return void
 */
/**
 * testManyClassesPerformance
 *
 * @return void
 */
/**
 * testManyClassesPerformance
 *
 * @return void
 */
/**
 * testManyClassesPerformance
 *
 * @return void
 */
/**
 * testManyClassesPerformance
 *
 * @return void
 */
/**
 * testManyClassesPerformance
 *
 * @return void
 */
function testManyClassesPerformance(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddInvalidCSSClassWithSpaceThrowsException
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpaceThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpaceThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpaceThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpaceThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpaceThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpaceThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpaceThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpaceThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpaceThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpaceThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpaceThrowsException
 *
 * @return void
 */
function testAddInvalidCSSClassWithSpaceThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::/**
 * element
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class);
        $this->element->addCSSClass('btn primary');
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group error-conditions
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddInvalidCSSClassWithCommaThrowsException
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddInvalidCSSClassWithCommaThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithCommaThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithCommaThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithCommaThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithCommaThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithCommaThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithCommaThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithCommaThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithCommaThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithCommaThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithCommaThrowsException
 *
 * @return void
 */
function testAddInvalidCSSClassWithCommaThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::/**
 * element
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class);
        $this->element->addCSSClass('btn,primary');
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group error-conditions
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddInvalidCSSClassWithSpecialCharacterThrowsException
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpecialCharacterThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpecialCharacterThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpecialCharacterThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpecialCharacterThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpecialCharacterThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpecialCharacterThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpecialCharacterThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpecialCharacterThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpecialCharacterThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpecialCharacterThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSpecialCharacterThrowsException
 *
 * @return void
 */
function testAddInvalidCSSClassWithSpecialCharacterThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::/**
 * element
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class);
        $this->element->addCSSClass('btn@primary');
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group error-conditions
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAddInvalidCSSClassWithSemicolonThrowsException
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSemicolonThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSemicolonThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSemicolonThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSemicolonThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSemicolonThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSemicolonThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSemicolonThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSemicolonThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSemicolonThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSemicolonThrowsException
 *
 * @return void
 */
/**
 * testAddInvalidCSSClassWithSemicolonThrowsException
 *
 * @return void
 */
function testAddInvalidCSSClassWithSemicolonThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::/**
 * element
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class);
        $this->element->addCSSClass('btn;primary');
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group error-conditions
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testBatchAddWithInvalidClassesThrowsException
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testBatchAddWithInvalidClassesThrowsException
 *
 * @return void
 */
/**
 * testBatchAddWithInvalidClassesThrowsException
 *
 * @return void
 */
/**
 * testBatchAddWithInvalidClassesThrowsException
 *
 * @return void
 */
/**
 * testBatchAddWithInvalidClassesThrowsException
 *
 * @return void
 */
/**
 * testBatchAddWithInvalidClassesThrowsException
 *
 * @return void
 */
/**
 * testBatchAddWithInvalidClassesThrowsException
 *
 * @return void
 */
/**
 * testBatchAddWithInvalidClassesThrowsException
 *
 * @return void
 */
/**
 * testBatchAddWithInvalidClassesThrowsException
 *
 * @return void
 */
/**
 * testBatchAddWithInvalidClassesThrowsException
 *
 * @return void
 */
/**
 * testBatchAddWithInvalidClassesThrowsException
 *
 * @return void
 */
/**
 * testBatchAddWithInvalidClassesThrowsException
 *
 * @return void
 */
function testBatchAddWithInvalidClassesThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::/**
 * element
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class);
        $this->element->addCSSClasses(['btn', 'invalid@class', 'primary']);
    }

    // ===== INTEGRATION TESTS =====

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group integration
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testCSSPreservedWithOtherAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testCSSPreservedWithOtherAttributes
 *
 * @return void
 */
/**
 * testCSSPreservedWithOtherAttributes
 *
 * @return void
 */
/**
 * testCSSPreservedWithOtherAttributes
 *
 * @return void
 */
/**
 * testCSSPreservedWithOtherAttributes
 *
 * @return void
 */
/**
 * testCSSPreservedWithOtherAttributes
 *
 * @return void
 */
/**
 * testCSSPreservedWithOtherAttributes
 *
 * @return void
 */
/**
 * testCSSPreservedWithOtherAttributes
 *
 * @return void
 */
/**
 * testCSSPreservedWithOtherAttributes
 *
 * @return void
 */
/**
 * testCSSPreservedWithOtherAttributes
 *
 * @return void
 */
/**
 * testCSSPreservedWithOtherAttributes
 *
 * @return void
 */
/**
 * testCSSPreservedWithOtherAttributes
 *
 * @return void
 */
function testCSSPreservedWithOtherAttributes(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testMultipleCSSOperationsChained
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testMultipleCSSOperationsChained
 *
 * @return void
 */
/**
 * testMultipleCSSOperationsChained
 *
 * @return void
 */
/**
 * testMultipleCSSOperationsChained
 *
 * @return void
 */
/**
 * testMultipleCSSOperationsChained
 *
 * @return void
 */
/**
 * testMultipleCSSOperationsChained
 *
 * @return void
 */
/**
 * testMultipleCSSOperationsChained
 *
 * @return void
 */
/**
 * testMultipleCSSOperationsChained
 *
 * @return void
 */
/**
 * testMultipleCSSOperationsChained
 *
 * @return void
 */
/**
 * testMultipleCSSOperationsChained
 *
 * @return void
 */
/**
 * testMultipleCSSOperationsChained
 *
 * @return void
 */
/**
 * testMultipleCSSOperationsChained
 *
 * @return void
 */
function testMultipleCSSOperationsChained(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testCSSWithNestedElements
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testCSSWithNestedElements
 *
 * @return void
 */
/**
 * testCSSWithNestedElements
 *
 * @return void
 */
/**
 * testCSSWithNestedElements
 *
 * @return void
 */
/**
 * testCSSWithNestedElements
 *
 * @return void
 */
/**
 * testCSSWithNestedElements
 *
 * @return void
 */
/**
 * testCSSWithNestedElements
 *
 * @return void
 */
/**
 * testCSSWithNestedElements
 *
 * @return void
 */
/**
 * testCSSWithNestedElements
 *
 * @return void
 */
/**
 * testCSSWithNestedElements
 *
 * @return void
 */
/**
 * testCSSWithNestedElements
 *
 * @return void
 */
/**
 * testCSSWithNestedElements
 *
 * @return void
 */
function testCSSWithNestedElements(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testCSSWithBootstrapPattern
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testCSSWithBootstrapPattern
 *
 * @return void
 */
/**
 * testCSSWithBootstrapPattern
 *
 * @return void
 */
/**
 * testCSSWithBootstrapPattern
 *
 * @return void
 */
/**
 * testCSSWithBootstrapPattern
 *
 * @return void
 */
/**
 * testCSSWithBootstrapPattern
 *
 * @return void
 */
/**
 * testCSSWithBootstrapPattern
 *
 * @return void
 */
/**
 * testCSSWithBootstrapPattern
 *
 * @return void
 */
/**
 * testCSSWithBootstrapPattern
 *
 * @return void
 */
/**
 * testCSSWithBootstrapPattern
 *
 * @return void
 */
/**
 * testCSSWithBootstrapPattern
 *
 * @return void
 */
/**
 * testCSSWithBootstrapPattern
 *
 * @return void
 */
function testCSSWithBootstrapPattern(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testCSSWithTailwindPattern
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testCSSWithTailwindPattern
 *
 * @return void
 */
/**
 * testCSSWithTailwindPattern
 *
 * @return void
 */
/**
 * testCSSWithTailwindPattern
 *
 * @return void
 */
/**
 * testCSSWithTailwindPattern
 *
 * @return void
 */
/**
 * testCSSWithTailwindPattern
 *
 * @return void
 */
/**
 * testCSSWithTailwindPattern
 *
 * @return void
 */
/**
 * testCSSWithTailwindPattern
 *
 * @return void
 */
/**
 * testCSSWithTailwindPattern
 *
 * @return void
 */
/**
 * testCSSWithTailwindPattern
 *
 * @return void
 */
/**
 * testCSSWithTailwindPattern
 *
 * @return void
 */
/**
 * testCSSWithTailwindPattern
 *
 * @return void
 */
function testCSSWithTailwindPattern(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testConditionalCSSInComplexScenario
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testConditionalCSSInComplexScenario
 *
 * @return void
 */
/**
 * testConditionalCSSInComplexScenario
 *
 * @return void
 */
/**
 * testConditionalCSSInComplexScenario
 *
 * @return void
 */
/**
 * testConditionalCSSInComplexScenario
 *
 * @return void
 */
/**
 * testConditionalCSSInComplexScenario
 *
 * @return void
 */
/**
 * testConditionalCSSInComplexScenario
 *
 * @return void
 */
/**
 * testConditionalCSSInComplexScenario
 *
 * @return void
 */
/**
 * testConditionalCSSInComplexScenario
 *
 * @return void
 */
/**
 * testConditionalCSSInComplexScenario
 *
 * @return void
 */
/**
 * testConditionalCSSInComplexScenario
 *
 * @return void
 */
/**
 * testConditionalCSSInComplexScenario
 *
 * @return void
 */
function testConditionalCSSInComplexScenario(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testExistingSetAttributeStillWorks
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
function testExistingSetAttributeStillWorks(): void
    {
        $this->element->setAttribute('class', 'btn');
        $this->assertStringContainsString('class="btn"', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group regression
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testExistingAddAttributeStillWorks
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testExistingAddAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingAddAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingAddAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingAddAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingAddAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingAddAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingAddAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingAddAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingAddAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingAddAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingAddAttributeStillWorks
 *
 * @return void
 */
function testExistingAddAttributeStillWorks(): void
    {
        $this->element->addAttribute('class', 'btn');
        $this->assertStringContainsString('class="btn"', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group regression
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testExistingAddCSSClassStillWorks
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testExistingAddCSSClassStillWorks
 *
 * @return void
 */
/**
 * testExistingAddCSSClassStillWorks
 *
 * @return void
 */
/**
 * testExistingAddCSSClassStillWorks
 *
 * @return void
 */
/**
 * testExistingAddCSSClassStillWorks
 *
 * @return void
 */
/**
 * testExistingAddCSSClassStillWorks
 *
 * @return void
 */
/**
 * testExistingAddCSSClassStillWorks
 *
 * @return void
 */
/**
 * testExistingAddCSSClassStillWorks
 *
 * @return void
 */
/**
 * testExistingAddCSSClassStillWorks
 *
 * @return void
 */
/**
 * testExistingAddCSSClassStillWorks
 *
 * @return void
 */
/**
 * testExistingAddCSSClassStillWorks
 *
 * @return void
 */
/**
 * testExistingAddCSSClassStillWorks
 *
 * @return void
 */
function testExistingAddCSSClassStillWorks(): void
    {
        $this->element->addCSSClass('btn');
        $this->assertStringContainsString('class="btn"', (string)$this->element);
    }

    /**
     * @test
     * @group FR-006
     * @group css-management
     * @group regression
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testBackwardCompatibilityWithSetAttributeClass
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testBackwardCompatibilityWithSetAttributeClass
 *
 * @return void
 */
/**
 * testBackwardCompatibilityWithSetAttributeClass
 *
 * @return void
 */
/**
 * testBackwardCompatibilityWithSetAttributeClass
 *
 * @return void
 */
/**
 * testBackwardCompatibilityWithSetAttributeClass
 *
 * @return void
 */
/**
 * testBackwardCompatibilityWithSetAttributeClass
 *
 * @return void
 */
/**
 * testBackwardCompatibilityWithSetAttributeClass
 *
 * @return void
 */
/**
 * testBackwardCompatibilityWithSetAttributeClass
 *
 * @return void
 */
/**
 * testBackwardCompatibilityWithSetAttributeClass
 *
 * @return void
 */
/**
 * testBackwardCompatibilityWithSetAttributeClass
 *
 * @return void
 */
/**
 * testBackwardCompatibilityWithSetAttributeClass
 *
 * @return void
 */
/**
 * testBackwardCompatibilityWithSetAttributeClass
 *
 * @return void
 */
function testBackwardCompatibilityWithSetAttributeClass(): void
    {
        $this->element->setAttribute('class', 'old-class');
        $this->element->addCSSClass('new-class');
        
        $classes = $this->element->getCSSClasses();
        $this->assertContains('old-class', $classes);
        $this->assertContains('new-class', $classes);
    }
}
