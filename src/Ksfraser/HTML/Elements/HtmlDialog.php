<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

/**
 * class HtmlDialog
 *
 *
 *
 *
 *
 *
 * @since v2.0.1 2026-04-14
 */
class HtmlDialog extends HtmlElement
{
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @param bool $open
 * @return void
 */
    public function __construct(bool $open = false)
    {
        parent::__construct();
        $this->setTag('dialog');
        if ($open) {
            $this->setAttribute('open', 'open');
        }
    }
}
