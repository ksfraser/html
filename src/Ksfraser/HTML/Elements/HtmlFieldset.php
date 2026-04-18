<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * class HtmlFieldset

 *

 * @since v2.0.1 2026-04-14

 * @return void

 */
/**
 * HtmlFieldset
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlFieldset extends HtmlElement
{
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
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
function __construct($content = null)
    {
        if ($content instanceof HtmlElementInterface) {
            parent::__construct($content);
        } else {
            parent::__construct(null, $content === null ? null : (string)$content);
        }
        $this->setTag('fieldset');
    }
}
