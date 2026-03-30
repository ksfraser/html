<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElementInterface;

class HtmlElementInterfaceCoverageTest extends TestCase {
    public function testAllImplementations() {
        $implementations = [
            'Ksfraser\\HTML\\HtmlElement',
            'Ksfraser\\HTML\\HtmlAttribute',
            'Ksfraser\\HTML\\HtmlAttributeList',
            'Ksfraser\\HTML\\HtmlFragment',
            'Ksfraser\\HTML\\Elements\\HtmlSelect',
            'Ksfraser\\HTML\\Elements\\HtmlOption',
            'Ksfraser\\HTML\\Elements\\HtmlRaw',
            'Ksfraser\\HTML\\Elements\\HtmlString',
            // Add all other classes implementing HtmlElementInterface
        ];
        foreach ($implementations as $class) {
            $this->assertTrue(is_subclass_of($class, HtmlElementInterface::class) || in_array(HtmlElementInterface::class, class_implements($class)), "$class does not implement HtmlElementInterface");
        }
    }
}
