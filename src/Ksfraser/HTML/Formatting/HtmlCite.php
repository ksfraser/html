<?php

namespace Ksfraser\HTML\Formatting;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * HtmlCite - semantic wrapper for <cite>

 *

 * @since 1.0.4 2026-02-21

 */
class HtmlCite extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param string|HtmlElementInterface|null $content
 * @return void
 */
    public function __construct(string|HtmlElementInterface|null $content = null) {
        parent::__construct('cite', $content);
    }
}
