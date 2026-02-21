<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlOption;

class HtmlOptionTest extends TestCase {
    public function testInstance() {
        $option = new HtmlOption('value', 'label');
        $this->assertInstanceOf(HtmlOption::class, $option);
    }

    // Add more tests for all public methods and edge cases
}
