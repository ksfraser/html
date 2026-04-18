<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * class HtmlCode

 *

 * @since v2.0.1 2026-04-14

 * @return void

 */
/**
 * HtmlCode
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlCode extends HtmlElement
{
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @param mixed $text
 * @return void
 */
    public /**
 * __construct
 *
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $text
 * @return void
 */
function __construct($text = '')
    {
        if ($text instanceof HtmlElementInterface) {
            parent::__construct($text);
        } else {
            // store raw text as content; HtmlElement will escape when rendering
            parent::__construct('code', (string)$text);
        }
        $this->setTag('code');
    }
}
