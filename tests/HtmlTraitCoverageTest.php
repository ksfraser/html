<?php
use PHPUnit\Framework\TestCase;

class HtmlTraitCoverageTest extends TestCase {
    public function testTraitsExist() {
        $traits = [
            'Ksfraser\\HTML\\HTMLChildrenTrait',
            'Ksfraser\\HTML\\HtmlAttributesTrait',
        ];
        foreach ($traits as $trait) {
            $this->assertTrue(trait_exists($trait), "$trait does not exist");
        }
    }
}
