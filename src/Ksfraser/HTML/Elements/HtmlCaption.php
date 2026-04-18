<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * class HtmlCaption

 *

 * @since v2.0.1 2026-04-14

 * @return void

 */
/**
 * HtmlCaption
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlCaption extends HtmlElement
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
function __construct($content = '')
    {
        if ($content instanceof HtmlElementInterface) {
            parent::__construct($content);
        } else {
            parent::__construct('caption', (string)$content);
        }
        $this->setTag('caption');
    }
}
