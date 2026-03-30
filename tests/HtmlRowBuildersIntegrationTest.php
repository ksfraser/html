<?php
use PHPUnit\Framework\TestCase;

class HtmlRowBuildersIntegrationTest extends TestCase {
    public function testLoanTypeTableRowBuildAndRender() {
        $rowBuilder = new \Ksfraser\HTML\Rows\LoanTypeTableRow();
        $data = (object)[
            'id' => 1,
            'name' => 'Fixed',
            'description' => 'Fixed Rate Loan'
        ];
        $row = $rowBuilder->build($data);
        $html = $row->getHtml();
        $this->assertStringContainsString('Fixed', $html);
        $this->assertStringContainsString('Edit', $html);
        $this->assertStringContainsString('Delete', $html);
    }

    public function testLoanSummaryTableRowBuildAndRender() {
        $rowBuilder = new \Ksfraser\HTML\Rows\LoanSummaryTableRow();
        $data = (object)[
            'id' => 101,
            'borrower' => 'John Doe',
            'amount' => 10000,
            'status' => 'Active'
        ];
        $row = $rowBuilder->build($data);
        $html = $row->getHtml();
        $this->assertStringContainsString('John Doe', $html);
        $this->assertStringContainsString('Edit', $html);
        $this->assertStringContainsString('View', $html);
    }

    public function testInterestFreqTableRowBuildAndRender() {
        $rowBuilder = new \Ksfraser\HTML\Rows\InterestFreqTableRow();
        $data = (object)[
            'id' => 201,
            'name' => 'Monthly',
            'description' => 'Occurs every month'
        ];
        $row = $rowBuilder->build($data);
        $html = $row->getHtml();
        $this->assertStringContainsString('Monthly', $html);
        $this->assertStringContainsString('Edit', $html);
        $this->assertStringContainsString('Delete', $html);
    }
}
