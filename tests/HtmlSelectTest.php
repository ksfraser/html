<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSelect;
use Ksfraser\HTML\Elements\HtmlOption;
use Ksfraser\HTML\Attributes\HtmlNameValue;

/**
 * class HtmlSelectTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlSelectTest extends TestCase
{
/**
 * testSelectRendersWithName
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testSelectRendersWithName()
    {
        $select = new HtmlSelect(new HtmlNameValue('test_select'));
        $html = $select->getName();
        $this->assertEquals('test_select', html_entity_decode($html));
    }

/**
 * testSelectRendersOptions
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testSelectRendersOptions()
    {
        $select = new HtmlSelect(new HtmlNameValue('test_select'));
        $option1 = new HtmlOption('v1', 'Label 1');
        $option2 = new HtmlOption('v2', 'Label 2', true);
        $select->addOption($option1)->addOption($option2);
        $selectHtml = $select->getHtml();
        $this->assertStringContainsString('<option value="v1">Label 1</option>', $selectHtml);
        $this->assertStringContainsString('<option value="v2" selected>Label 2</option>', $selectHtml);
    }

/**
 * testNameValueEscaping
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testNameValueEscaping()
    {
        $select = new HtmlSelect(new HtmlNameValue('bad\"name<test>'));
        $this->assertStringNotContainsString('bad"name<test>', $select->getName());
        $this->assertStringContainsString('&quot;', $select->getName());
    }
}
