<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\VIEW_TABLE;

class VIEW_TABLETest extends TestCase
{
    public function testConstructor()
    {
        $table = new VIEW_TABLE();
        $this->assertInstanceOf(VIEW_TABLE::class, $table);
    }

    // Add more tests for other methods in the VIEW_TABLE class
}