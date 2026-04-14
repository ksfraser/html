<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlTfoot
 *
 *
 * @since v2.0.1 2026-04-14
 */
class HtmlTfoot extends HtmlElement
{
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function __construct()
    {
        parent::__construct();
        $this->setTag('tfoot');
    }

/**
 * addRow
 *
 * @since v1.0.5 2026-04-14
 * @param HtmlElementInterface $tr
 * @return self
 */
    public function addRow(HtmlElementInterface $tr): self
    {
        $this->addNested($tr);
        return $this;
    }
}
