<?php
namespace Ksfraser\HTML\Button;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\js\HtmlJsEventTrait;

/**
 * HtmlButton - HTML <button> element abstraction
 * @since 20250517
 */
class HtmlButton extends HtmlElement {
    use \Ksfraser\HTML\js\HtmlJsEventTrait;

    /**
     * Constructor
     * @param string|HtmlElementInterface|null $data Optional text content or nested element
     */
    public function __construct(string|HtmlElementInterface|null $data = null) {
        parent::__construct($data);
        $this->setTag('button');
    }
}
