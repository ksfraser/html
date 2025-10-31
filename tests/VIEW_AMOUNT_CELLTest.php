<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\VIEW_AMOUNT_CELL;

class VIEW_AMOUNT_CELLTest extends TestCase
{
    public function testConstructor()
    {
        $cell = new VIEW_AMOUNT_CELL();
        $this->assertInstanceOf(VIEW_AMOUNT_CELL::class, $cell);
    }

    // Add more tests for other methods in the VIEW_AMOUNT_CELL class
}