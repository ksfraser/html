<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlElementInterfaceCoverageTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlElementInterfaceCoverageTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlElementInterfaceCoverageTest extends TestCase {
/**
 * testAllImplementations
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testAllImplementations
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAllImplementations
 *
 * @return void
 */
/**
 * testAllImplementations
 *
 * @return void
 */
/**
 * testAllImplementations
 *
 * @return void
 */
/**
 * testAllImplementations
 *
 * @return void
 */
/**
 * testAllImplementations
 *
 * @return void
 */
/**
 * testAllImplementations
 *
 * @return void
 */
/**
 * testAllImplementations
 *
 * @return void
 */
/**
 * testAllImplementations
 *
 * @return void
 */
/**
 * testAllImplementations
 *
 * @return void
 */
/**
 * testAllImplementations
 *
 * @return void
 */
function testAllImplementations() {
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
            $this->assertTrue(is_subclass_of($class, HtmlElementInterface::/**
 * in_array
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class) || in_array(HtmlElementInterface::/**
 * class_implements
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, class_implements($class)), "$class does not implement HtmlElementInterface");
        }
    }
}
