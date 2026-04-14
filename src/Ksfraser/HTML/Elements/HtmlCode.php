<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlCode
 *
 *
 * @since v2.0.1 2026-04-14
 */
class HtmlCode extends HtmlElement
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
            // store raw text as content; HtmlElement will escape when rendering
            parent::__construct('code', (string)$text);
        }
        $this->setTag('code');
    }
}
