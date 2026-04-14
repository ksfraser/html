<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * Badge element — lightweight wrapper for <span> with badge semantics

 *

 * @since v2.0.1 2026-04-14

 */
class Badge extends HtmlElement
{
    /**
     * Accept string content or an HtmlElementInterface
     *
     * @since v2.0.1 2026-04-14
     * @param mixed $content
     * @return void
     */
    public function __construct($content = '')
    {
        if ($content instanceof HtmlElementInterface) {
            parent::__construct($content);
            $this->setTag('span');
        } else {
            parent::__construct('span', (string)$content);
        }

        // default badge class — factories may add variant classes
        $this->addCSSClass('badge');
    }
}
