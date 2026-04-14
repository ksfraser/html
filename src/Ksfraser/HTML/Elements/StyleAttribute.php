<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlAttribute;

/**

 * StyleAttribute represents an inline style attribute for HTML elements.

 *

 * 

 * A Style is an attribute with KEY Style and value param:setting

 * 

 *   https://www.w3schools.com/html/html_styles.asp

 * 

 *   Examples:

 *     background-color

 *     color

 *     font-family

 *     font-size

 *     text-align

 * 

 *   This is INLINE CSS. There is also Internal CSS (see HtmlStyle).

 * 

 *

 * @since v1.0.0 2026-04-11

 */
class StyleAttribute extends HtmlAttribute
{
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param string $value
 * @return void
 */
    public function __construct(string $value)
    {
        parent::__construct('style', $value);
    }
}
