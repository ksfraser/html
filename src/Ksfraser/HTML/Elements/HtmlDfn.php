<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

/**
 * Semantic wrapper for <dfn> tag.
 */
use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlDfn
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlDfn extends HtmlElement
{
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param HtmlElementInterface $content
 * @return void
 */
    public function __construct(HtmlElementInterface $content)
    {
        parent::__construct($content);
        $this->setTag('df');
    }
}
