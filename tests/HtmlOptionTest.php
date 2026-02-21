<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlOption;

class HtmlOptionTest extends TestCase {
    public function testInstance() {
        $option = new HtmlOption(new HtmlString('value'), new HtmlString('label'));
        $this->assertInstanceOf(HtmlOption::class, $option);
    }

    public function testToStringReturnsExpectedHtml() {
        $option = new HtmlOption(new HtmlString('value'), new HtmlString('label'));
        $html = (string)$option;
        $this->assertStringContainsString('<option', $html);
        $this->assertStringContainsString('label', $html);
        $this->assertStringContainsString('</option>', $html);
    }

    // Add more tests for all public methods and edge cases
}
