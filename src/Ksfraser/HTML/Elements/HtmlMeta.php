<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class HtmlMeta
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlMeta extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param ?HtmlString $content
 * @return void
 */
    public function __construct(?HtmlString $content = null) {
        parent::__construct($content);
        $this->setTag('meta');
        // Meta tags are self-closing, so no content is needed
    }

/**
 * setAttribute
 *
 * @since v1.0.0 2026-04-11
 * @param string $name
 * @param mixed $value
 * @return \Ksfraser\HTML\HtmlElement
 */
    public function setAttribute(string $name, $value): \Ksfraser\HTML\HtmlElement {
        return parent::setAttribute($name, $value);
    }

/**
 * getHtml
 *
 * @since v1.0.0 2026-04-11
 * @return string
 */
    public function getHtml(): string {
        $attrs = trim($this->renderAttributesString());
        return '<meta' . ($attrs ? ' ' . $attrs : '') . ' />';
    }
}
