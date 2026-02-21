<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlFragment;
use Ksfraser\HTML\HtmlElementInterface;

class HtmlFragmentTest extends TestCase {
    public function testImplementsInterface() {
        $fragment = new HtmlFragment();
        $this->assertInstanceOf(HtmlElementInterface::class, $fragment);
    }

    public function testAddChildReturnsSelf() {
        $fragment = new HtmlFragment();
        $child = $this->getMockBuilder(HtmlElementInterface::class)->getMock();
        $result = $fragment->addChild($child);
        $this->assertSame($fragment, $result);
    }

    // Add more tests for all public methods and edge cases
}
