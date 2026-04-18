<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * Badge element — lightweight wrapper for <span> with badge semantics

 *

 * @since v2.0.1 2026-04-14

 * @return void

 */
/**
 * Badge
 *
 * @since v1.0.0 2026-04-14
 * @return void
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
    public /**
 * __construct
 *
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $content
 * @return void
 */
function __construct($content = '')
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
