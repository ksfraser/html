<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlEmail;

/**
 * class HtmlEmailTest
 *
 * @since 1.0.4 2026-02-21
 */
class HtmlEmailTest extends TestCase
{
/**
 * testEmailHref
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testEmailHref()
    {
        $email = new HtmlEmail();
        $email->setHref('mailto:test@example.com')->setText('Email Me');
        $html = $email->getHtml();
        $this->assertStringContainsString('href="mailto:test@example.com"', $html);
        $this->assertStringContainsString('Email Me', $html);
    }
}
