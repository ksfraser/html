<?php
namespace Ksfraser\HTML\Formatting;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * Semantic wrapper for <p> tag.
 *
 * @since 1.0.4 2026-02-21
 */
class HtmlP extends HtmlElement
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
        $this->setTag('p');
    }
}
