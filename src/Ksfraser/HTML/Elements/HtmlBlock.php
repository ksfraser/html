<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * HtmlBlock - semantic wrapper for <div>

 *

 * @since v1.0.0 2026-04-11

 */
class HtmlBlock extends HtmlDiv {
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param HtmlElementInterface $content
 * @return void
 */
    public function __construct(HtmlElementInterface $content) {
        parent::__construct($content);
    }
}
