<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlTr
 *
 *
 *
 *
 *
 *
 * @since v2.0.1 2026-04-14
 */
class HtmlTr extends HtmlElement
{
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @param ?HtmlElementInterface $data
 * @return void
 */
    public function __construct(?HtmlElementInterface $data = null)
    {
        parent::__construct($data);
        $this->setTag('tr');
    }

/**
 * addCell
 *
 * @since v1.0.5 2026-04-14
 * @param HtmlElementInterface $cell
 * @return self
 */
    public function addCell(HtmlElementInterface $cell): self
    {
        $this->addNested($cell);
        return $this;
    }
}
