<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlEmail;

class HtmlEmailTest extends TestCase
{
    public function testEmailHref()
    {
        $email = new HtmlEmail();
        $email->setHref('mailto:test@example.com')->setText('Email Me');
        $html = $email->getHtml();
        $this->assertStringContainsString('href="mailto:test@example.com"', $html);
        $this->assertStringContainsString('Email Me', $html);
    }
}
