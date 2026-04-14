<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

/**

 * class HtmlCol

 *

 * @since v2.0.1 2026-04-14

 * @return void

 */
class HtmlCol extends HtmlElement
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
        $this->setTag('col');
        // void element
        $ref = new \ReflectionClass($this);
        if ($ref->hasProperty('empty')) {
            $prop = $ref->getProperty('empty');
            $prop->setAccessible(true);
            $prop->setValue($this, true);
        }
    }

/**

 * setSpan

 *

 * @since v1.0.5 2026-04-14

 * @param int $span

 * @return self

 */
    public function setSpan(int $span): self
    {
        $this->addAttribute('span', (string)$span);
        return $this;
    }
}
