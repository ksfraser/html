<?php

namespace Ksfraser\HTML\Formatting;

use Ksfraser\HTML\HtmlElement;

/**

 * class HtmlFormatting

 *

 * @since 1.0.3 2026-02-21

 */
class HtmlFormatting extends HtmlElement
{
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param mixed $content
 * @return void
 */
    public function __construct($content)
    {
        parent::__construct($content);
        $this->setTag('span');
    }
}
