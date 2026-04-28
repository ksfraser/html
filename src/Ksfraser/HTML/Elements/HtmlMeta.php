<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\Elements\HtmlString;

class HtmlMeta extends HtmlElement {
    /**
     * @param HtmlString|null $content Optional text content for the meta tag.
     *
     * Uses the concrete HtmlString type (rather than HtmlElementInterface) because
     * <meta> content is always raw text; child element trees are never embedded
     * inside a meta element. Self-closing — no visible rendered content.
     */
    public function __construct(?HtmlString $content = null) {
        parent::__construct($content);
        $this->setTag('meta');
        // Meta tags are self-closing, so no content is needed
    }

    public function setAttribute(string $name, $value): \Ksfraser\HTML\HtmlElement {
        return parent::setAttribute($name, $value);
    }

    public function getHtml(): string {
        $attrs = trim($this->getAttributes());
        return '<meta' . ($attrs ? ' ' . $attrs : '') . ' />';
    }
}
