<?php

namespace Ksfraser\HTML\Tests;

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * Tests for AriaAttributeTrait - FR-009
 * Comprehensive test suite for ARIA attribute management
 *
 *
 * @group FR-009
 * @group aria-attributes
 * @since 1.0.5 2026-03-30
 */
class AriaAttributeTraitTest extends TestCase
{
    /**
     * Test element with AriaAttributeTrait
     */
    private HtmlElement $element;

/**
 * setUp
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    protected function setUp(): void
    {
        $this->element = new class extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
            public function __construct() {
                parent::__construct();
                $this->tag = 'div';
            }
        };
    }

    // ==================== Happy Path Tests ====================

    /**
     * @test
     * @group aria-attributes
     * @group happy-path
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaLabel()
    {
        $this->element->setAriaLabel('Close button');
        $this->assertTrue($this->element->hasAria('label'));
        $this->assertEquals('Close button', $this->element->getAria('label'));
    }

    /**
     * @test
     * @group aria-attributes
     * @group happy-path
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaLabelRendersInHtml()
    {
        $this->element->setAriaLabel('Close button');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-label="Close button"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group happy-path
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetRole()
    {
        $this->element->setRole('button');
        $this->assertTrue($this->element->hasAria('role'));
        $this->assertEquals('button', $this->element->getAria('role'));
    }

    /**
     * @test
     * @group aria-attributes
     * @group happy-path
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetRoleRendersInHtml()
    {
        $this->element->setRole('button');
        $html = (string)$this->element;
        $this->assertStringContainsString('role="button"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group happy-path
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaDescribedBy()
    {
        $this->element->setAriaDescribedBy('help-text');
        $this->assertTrue($this->element->hasAria('describedby'));
        $this->assertEquals('help-text', $this->element->getAria('describedby'));
    }

    /**
     * @test
     * @group aria-attributes
     * @group happy-path
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetMultipleAriaAttributes()
    {
        $this->element->setAriaLabel('Submit form')
                      ->setRole('button')
                      ->setAriaDescribedBy('instructions');

        $html = (string)$this->element;
        $this->assertStringContainsString('aria-label="Submit form"', $html);
        $this->assertStringContainsString('role="button"', $html);
        $this->assertStringContainsString('aria-describedby="instructions"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group happy-path
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testGetAllAriaAttributes()
    {
        $this->element->setAriaLabel('Label');
        $this->element->setRole('button');
        $this->element->setAriaDescribedBy('desc');

        $all = $this->element->getAllAria();
        $this->assertCount(3, $all);
        $this->assertEquals('Label', $all['label']);
        $this->assertEquals('button', $all['role']);
        $this->assertEquals('desc', $all['describedby']);
    }

    // ==================== ARIA State Properties ====================

    /**
     * @test
     * @group aria-attributes
     * @group aria-states
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaHidden()
    {
        $this->element->setAriaHidden(true);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-hidden="true"', $html);

        $this->element->setAriaHidden(false);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-hidden="false"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-states
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaDisabled()
    {
        $this->element->setAriaDisabled(true);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-disabled="true"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-states
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaPressed()
    {
        $this->element->setAriaPressed(true);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-pressed="true"', $html);

        $this->element->setAriaPressed('mixed');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-pressed="mixed"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-states
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaChecked()
    {
        $this->element->setAriaChecked(true);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-checked="true"', $html);

        $this->element->setAriaChecked('mixed');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-checked="mixed"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-states
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaSelected()
    {
        $this->element->setAriaSelected(true);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-selected="true"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-states
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaExpanded()
    {
        $this->element->setAriaExpanded(true);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-expanded="true"', $html);

        $this->element->setAriaExpanded(false);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-expanded="false"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-states
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaBusy()
    {
        $this->element->setAriaBusy(true);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-busy="true"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-states
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaModal()
    {
        $this->element->setAriaModal(true);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-modal="true"', $html);
    }

    // ==================== ARIA Live Region Properties ====================

    /**
     * @test
     * @group aria-attributes
     * @group aria-live
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaLive()
    {
        $this->element->setAriaLive('polite');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-live="polite"', $html);

        $this->element->setAriaLive('assertive');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-live="assertive"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-live
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaAtomic()
    {
        $this->element->setAriaAtomic(true);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-atomic="true"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-live
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaRelevant()
    {
        $this->element->setAriaRelevant('additions text');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-relevant="additions text"', $html);
    }

    // ==================== ARIA Relationship Properties ====================

    /**
     * @test
     * @group aria-attributes
     * @group aria-relationships
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaLabelledBy()
    {
        $this->element->setAriaLabelledBy('heading');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-labelledby="heading"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-relationships
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaOwns()
    {
        $this->element->setAriaOwns('menu');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-owns="menu"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-relationships
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaActivedescendant()
    {
        $this->element->setAriaActivedescendant('option-1');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-activedescendant="option-1"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-relationships
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaFlowto()
    {
        $this->element->setAriaFlowto('next-section');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-flowto="next-section"', $html);
    }

    // ==================== ARIA Widget Properties ====================

    /**
     * @test
     * @group aria-attributes
     * @group aria-widgets
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaValuemin()
    {
        $this->element->setAriaValuemin(0);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-valuemin="0"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-widgets
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaValuemax()
    {
        $this->element->setAriaValuemax(100);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-valuemax="100"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-widgets
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaValuenow()
    {
        $this->element->setAriaValuenow(50);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-valuenow="50"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-widgets
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaValuetext()
    {
        $this->element->setAriaValuetext('50 percent complete');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-valuetext="50 percent complete"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-widgets
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaPlaceholder()
    {
        $this->element->setAriaPlaceholder('Enter your name');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-placeholder="Enter your name"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-widgets
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaOrientation()
    {
        $this->element->setAriaOrientation('horizontal');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-orientation="horizontal"', $html);

        $this->element->setAriaOrientation('vertical');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-orientation="vertical"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-widgets
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaMultiline()
    {
        $this->element->setAriaMultiline(true);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-multiline="true"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-widgets
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaReadonly()
    {
        $this->element->setAriaReadonly(true);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-readonly="true"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group aria-widgets
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaRequired()
    {
        $this->element->setAriaRequired(true);
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-required="true"', $html);
    }

    // ==================== Generic ARIA Attribute ====================

    /**
     * @test
     * @group aria-attributes
     * @group generic
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetAriaWithCustomName()
    {
        $this->element->setAria('custom-attribute', 'value');
        $html = (string)$this->element;
        $this->assertStringContainsString('aria-custom-attribute="value"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group generic
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testGetAriaCustomAttribute()
    {
        $this->element->setAria('custom', 'value');
        $this->assertEquals('value', $this->element->getAria('custom'));
    }

    /**
     * @test
     * @group aria-attributes
     * @group generic
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testHasAriaCustomAttribute()
    {
        $this->element->setAria('custom', 'value');
        $this->assertTrue($this->element->hasAria('custom'));
        $this->assertFalse($this->element->hasAria('other'));
    }

    // ==================== HTML Escaping Tests ====================

    /**
     * @test
     * @group aria-attributes
     * @group escaping
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testAriaLabelEscapesSpecialCharacters()
    {
        $this->element->setAriaLabel('Close "dialog" & save');
        $html = (string)$this->element;
        $this->assertStringContainsString('&quot;', $html);
        $this->assertStringContainsString('&amp;', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group escaping
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testAriaDescriptionEscapesHtmlTags()
    {
        $this->element->setAriaLabel('Click <here> to continue');
        $html = (string)$this->element;
        $this->assertStringContainsString('&lt;', $html);
        $this->assertStringContainsString('&gt;', $html);
    }

    // ==================== Removal Tests ====================

    /**
     * @test
     * @group aria-attributes
     * @group removal
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testRemoveAriaAttribute()
    {
        $this->element->setAriaLabel('Label');
        $this->assertTrue($this->element->hasAria('label'));

        $this->element->removeAria('label');
        $this->assertFalse($this->element->hasAria('label'));
    }

    /**
     * @test
     * @group aria-attributes
     * @group removal
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testRemoveNonExistentAriaAttribute()
    {
        // Should not throw exception
        $this->element->removeAria('nonexistent');
        $this->assertFalse($this->element->hasAria('nonexistent'));
    }

    /**
     * @test
     * @group aria-attributes
     * @group removal
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testClearAllAriaAttributes()
    {
        $this->element->setAriaLabel('Label');
        $this->element->setRole('button');
        $this->element->setAriaDescribedBy('desc');

        $this->assertCount(3, $this->element->getAllAria());

        $this->element->clearAria();

        $this->assertCount(0, $this->element->getAllAria());
    }

    // ==================== Method Chaining Tests ====================

    /**
     * @test
     * @group aria-attributes
     * @group chaining
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testAriaMethodsReturnSelf()
    {
        $result = $this->element->setAriaLabel('Label');
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group aria-attributes
     * @group chaining
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testChainMultipleAriaMethodCalls()
    {
        $this->element
            ->setAriaLabel('Label')
            ->setRole('button')
            ->setAriaDescribedBy('desc')
            ->setAriaDisabled(true);

        $html = (string)$this->element;
        $this->assertStringContainsString('aria-label="Label"', $html);
        $this->assertStringContainsString('role="button"', $html);
        $this->assertStringContainsString('aria-describedby="desc"', $html);
        $this->assertStringContainsString('aria-disabled="true"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group chaining
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testChainAriaWithOtherMethods()
    {
        $this->element
            ->setAriaLabel('Button')
            ->setAttribute('id', 'my-btn')
            ->setAriaDescribedBy('help')
            ->addCSSClass('btn-primary')
            ->setData('action', 'submit');

        $html = (string)$this->element;
        $this->assertStringContainsString('aria-label="Button"', $html);
        $this->assertStringContainsString('id="my-btn"', $html);
        $this->assertStringContainsString('class="btn-primary"', $html);
        $this->assertStringContainsString('data-action="submit"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group chaining
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testRemoveAriaReturnsSelf()
    {
        $this->element->setAriaLabel('Label');
        $result = $this->element->removeAria('label');
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group aria-attributes
     * @group chaining
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testClearAriaReturnsSelf()
    {
        $result = $this->element->clearAria();
        $this->assertSame($this->element, $result);
    }

    // ==================== Common Accessibility Patterns ====================

    /**
     * @test
     * @group aria-attributes
     * @group patterns
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testButtonAccessibilityPattern()
    {
        $button = new class extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
            public function __construct() {
                parent::__construct(new HtmlString('Delete'));
                $this->tag = 'button';
            }
        };

        $button->setAriaLabel('Delete this item')
               ->setRole('button')
               ->setAttribute('type', 'button');

        $html = (string)$button;
        $this->assertStringContainsString('aria-label="Delete this item"', $html);
        $this->assertStringContainsString('role="button"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group patterns
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testMenuAccessibilityPattern()
    {
        $menu = new class extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
            public function __construct() {
                parent::__construct();
                $this->tag = 'ul';
            }
        };

        $menu->setRole('menu')
             ->setAriaLabel('Main navigation');

        $html = (string)$menu;
        $this->assertStringContainsString('role="menu"', $html);
        $this->assertStringContainsString('aria-label="Main navigation"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group patterns
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testProgressBarPattern()
    {
        $progressBar = new class extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
            public function __construct() {
                parent::__construct();
                $this->tag = 'div';
            }
        };

        $progressBar->setRole('progressbar')
                    ->setAriaValuemin(0)
                    ->setAriaValuemax(100)
                    ->setAriaValuenow(75)
                    ->setAriaValuetext('75 percent complete')
                    ->setAttribute('id', 'progress');

        $html = (string)$progressBar;
        $this->assertStringContainsString('role="progressbar"', $html);
        $this->assertStringContainsString('aria-valuemin="0"', $html);
        $this->assertStringContainsString('aria-valuemax="100"', $html);
        $this->assertStringContainsString('aria-valuenow="75"', $html);
        $this->assertStringContainsString('aria-valuetext="75 percent complete"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group patterns
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testLiveRegionPattern()
    {
        $liveRegion = new class extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
            public function __construct() {
                parent::__construct(new HtmlString('System updated'));
                $this->tag = 'div';
            }
        };

        $liveRegion->setAriaLive('polite')
                   ->setAriaAtomic(true)
                   ->setAttribute('role', 'status');

        $html = (string)$liveRegion;
        $this->assertStringContainsString('aria-live="polite"', $html);
        $this->assertStringContainsString('aria-atomic="true"', $html);
        $this->assertStringContainsString('role="status"', $html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group patterns
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testModalDialogPattern()
    {
        $modal = new class extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
            public function __construct() {
                parent::__construct();
                $this->tag = 'div';
            }
        };

        $modal->setRole('dialog')
              ->setAriaModal(true)
              ->setAriaLabel('Confirmation Dialog')
              ->setAriaDescribedBy('dialog-description')
              ->setAttribute('id', 'confirm-modal');

        $html = (string)$modal;
        $this->assertStringContainsString('role="dialog"', $html);
        $this->assertStringContainsString('aria-modal="true"', $html);
        $this->assertStringContainsString('aria-label="Confirmation Dialog"', $html);
    }

    // ==================== Edge Cases ====================

    /**
     * @test
     * @group aria-attributes
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testUpdateAriaAttribute()
    {
        $this->element->setAriaLabel('Original');
        $this->assertEquals('Original', $this->element->getAria('label'));

        $this->element->setAriaLabel('Updated');
        $this->assertEquals('Updated', $this->element->getAria('label'));
    }

    /**
     * @test
     * @group aria-attributes
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testGetNonExistentAriaAttribute()
    {
        $result = $this->element->getAria('nonexistent');
        $this->assertNull($result);
    }

    /**
     * @test
     * @group aria-attributes
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testAriaAttributeWithEmptyValue()
    {
        $this->element->setAriaLabel('');
        $html = (string)$this->element;
        // Empty values may not render
        $this->assertIsString($html);
    }

    /**
     * @test
     * @group aria-attributes
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testAriaAttributeWithUnicodeValue()
    {
        $this->element->setAriaLabel('Descripción en español');
        $html = (string)$this->element;
        $this->assertStringContainsString('Descripción en español', $html);
    }
}
