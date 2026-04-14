<?php

use PHPUnit\Framework\TestCase;

/**
 * class VIEWTest
 *
 * @since 1.0.1 2026-02-16
 */
class VIEWTest extends TestCase
{
    /**
     * Test the constructor of the VIEW class.
 * @return void
 * @since 1.0.1 2026-02-16
     */
    public function testConstructor()
    {
        $view = new VIEW();
        $this->assertInstanceOf(VIEW::class, $view);
    }

    /**
     * Test the set_var and get methods of the VIEW class.
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testSetVar()
    {
        $view = new VIEW();
        $view->set_var('key', 'value');
        $this->assertEquals('value', $view->get('key'));
    }

    /**
     * Test the display_table_with_edit method.
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function testDisplayTableWithEdit()
    {
        $view = new VIEW();
        $sql = "SELECT * FROM test_table";
        $headers = [
            ['label' => 'Column1', 'name' => 'col1'],
            ['label' => 'Column2', 'name' => 'col2']
        ];
        $index = 0;
        $this->expectNotToPerformAssertions();
        $view->display_table_with_edit($sql, $headers, $index);
    }
}