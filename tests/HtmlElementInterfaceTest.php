<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElementInterface;

class HtmlElementInterfaceTest extends TestCase {
    public function testInterfaceExists() {
        $this->assertTrue(interface_exists(HtmlElementInterface::class));
    }

    // Add more tests for interface contract if needed
}
