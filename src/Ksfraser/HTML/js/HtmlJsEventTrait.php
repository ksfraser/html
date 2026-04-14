<?php
namespace Ksfraser\HTML\JS;

use Ksfraser\HTML\HtmlAttribute;

/**
 * Trait for adding JavaScript event attributes to HTML elements
 *
 * @since 1.0.4 2026-02-21
 */
trait HtmlJsEventTrait {
    /**
     * Set the onclick attribute
     * @param HtmlAttribute $onclick
     * @return self
 * @since 1.0.4 2026-02-21
     */
    public function setOnclick(HtmlAttribute $onclick): self {
        $this->addAttributeObject(new HtmlAttribute('onclick', $onclick));
        return $this;
    }

    /**
     * Set the onclick handler using a string function body or call.
     *
     * @param string $handler JavaScript handler, e.g. "closeModal()"
     * @return self
 * @since v1.0.5 2026-04-14
     */
    public function setOnclickFunction(string $handler): self {
        $this->addAttributeObject(new \Ksfraser\HTML\HtmlAttribute('onclick', new \Ksfraser\HTML\Elements\HtmlString($handler)));
        return $this;
    }

    // Add more JS event methods as needed (e.g., setOnchange, setOnblur, etc.)
}
