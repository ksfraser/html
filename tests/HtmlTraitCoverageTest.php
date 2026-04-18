<?php
use PHPUnit\Framework\TestCase;

/**
 * class HtmlTraitCoverageTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlTraitCoverageTest extends TestCase {
/**
 * testTraitsExist
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testTraitsExist
 *
 * @return void
 */
/**
 * testTraitsExist
 *
 * @return void
 */
/**
 * testTraitsExist
 *
 * @return void
 */
/**
 * testTraitsExist
 *
 * @return void
 */
/**
 * testTraitsExist
 *
 * @return void
 */
/**
 * testTraitsExist
 *
 * @return void
 */
/**
 * testTraitsExist
 *
 * @return void
 */
/**
 * testTraitsExist
 *
 * @return void
 */
/**
 * testTraitsExist
 *
 * @return void
 */
/**
 * testTraitsExist
 *
 * @return void
 */
function testTraitsExist() {
        $traits = [
            'Ksfraser\\HTML\\HTMLChildrenTrait',
            'Ksfraser\\HTML\\HtmlAttributesTrait',
        ];
        foreach ($traits as $trait) {
            $this->assertTrue(trait_exists($trait), "$trait does not exist");
        }
    }
}
