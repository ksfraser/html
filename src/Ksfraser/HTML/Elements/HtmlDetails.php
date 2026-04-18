<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * class HtmlDetails

 *

 * @since v2.0.1 2026-04-14

 * @return void

 */
class HtmlDetails extends HtmlElement
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
        $this->setTag('details');
        if ($open) {
            $this->setAttribute('open', 'open');
        }
    }

/**

 * addSummary

 *

 * @since v1.0.5 2026-04-14

 * @param HtmlElementInterface $summary

 * @return self

 */
    public function addSummary(HtmlElementInterface $summary): self
    {
        $this->addNested($summary);
        return $this;
    }
}
