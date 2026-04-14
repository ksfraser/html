<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * Semantic wrapper for <figure> tag.

 *

 * @since v1.0.0 2026-04-11

 */
class HtmlFigure extends HtmlElement
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
        $this->setTag('figure');
    }
}
