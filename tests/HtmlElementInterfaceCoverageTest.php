<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlElementInterfaceCoverageTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlElementInterfaceCoverageTest extends TestCase {
/**
 * testAllImplementations
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
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
