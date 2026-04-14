<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * HtmlAside

 *

 * 

 * Represents the HTML <aside> element for tangential content.

 * Extends HtmlElement for standard element behavior.

 * 

 *

 * @since v1.0.0 2026-04-11

 */
class HtmlAside extends HtmlElement
{
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param HtmlElementInterface $content
 * @return void
 */
    public function __construct(HtmlElementInterface $content)
    {
        parent::__construct($content);
        $this->setTag('aside');
    }
}
