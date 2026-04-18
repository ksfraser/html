<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlElement;

/**

 * HtmlBlockquote - semantic wrapper for <blockquote>

 *

 * @since v1.0.0 2026-04-11

 * @return void

 */
class HtmlBlockquote extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param HtmlElementInterface $content
 * @return void
 */
    public function __construct(HtmlElementInterface $content) {
        parent::__construct($content);
        $this->setTag('blockquote');
    }
}
