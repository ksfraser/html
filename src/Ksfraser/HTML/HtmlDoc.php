<?php
namespace Ksfraser\HTML;

use Ksfraser\HTML\Elements\HtmlHtml;

/**
 * class HtmlDoc
 *
 * @since 1.0.5 2026-02-22
 */
class HtmlDoc {
    /**
     * @var HtmlHtml
     */
    protected $html = null;

/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param ?HtmlHtml $html
 * @return void
 */
    public function __construct(?HtmlHtml $html = null) {
        if( null !== $html ) {
            $this->addHtml($html);
        }
    }

/**
 * addHtml
 *
 * @since 1.0.5 2026-02-22
 * @param HtmlHtml $html
 * @return void
 */
    public function addHtml(HtmlHtml $html) {
        $this->html = $html;
        return $this;
    }

/**
 * addNested
 *
 * @since 1.0.5 2026-02-22
 * @param HtmlHtml $html
 * @return void
 */
        public function addNested(HtmlHtml $html) {
        $this->addHtml( $html );
        return $this;
    }

/**
 * getHtml
 *
 * @since 1.0.5 2026-02-22
 * @return string
 */
    public function getHtml(): string {
        return "<!DOCTYPE html>\n" . $this->html->getHtml();
    }

    /**
     * Echo the HTML document (for interface consistency)
 * @return void
 * @since v1.0.0 2026-04-13
     */
    public function toHtml(): void {
        echo $this->getHtml();
    }
}
