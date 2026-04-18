<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * class HtmlColgroup

 *

 * @since v2.0.1 2026-04-14

 * @return void

 */
class HtmlColgroup extends HtmlElement
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
        $this->setTag('colgroup');
    }

/**

 * addCol

 *

 * @since v1.0.5 2026-04-14

 * @param HtmlElementInterface $col

 * @return self

 */
    public function addCol(HtmlElementInterface $col): self
    {
        $this->addNested($col);
        return $this;
    }
}
