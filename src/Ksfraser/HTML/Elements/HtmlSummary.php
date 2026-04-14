<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlSummary
 *
 *
 *
 *
 *
 *
 * @since v2.0.1 2026-04-14
 */
class HtmlSummary extends HtmlElement
{
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @param mixed $text
 * @return void
 */
    public function __construct($text = '')
    {
        if ($text instanceof HtmlElementInterface) {
            parent::__construct($text);
        } else {
            parent::__construct('summary', (string)$text);
        }
        $this->setTag('summary');
    }
}
