<?php
namespace Ksfraser\HTML\Button;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * CloseButton - Pre-styled dismiss/close button
 *
 * Renders a <button> with Bootstrap classes `btn btn-secondary btn-sm`
 * and name="close_btn". Default label is "Close".
 *
 * @package Ksfraser\HTML\Button
 */
class CloseButton extends Button {
    /**
     * @param string|HtmlElementInterface|null $label Button label text or wrapped element.
     *                                                  Defaults to "Close".
     */
    public function __construct(string|HtmlElementInterface|null $label = null) {
        if ($label === null) {
            $label = new HtmlString('Close');
        }
        parent::__construct($label);
        $this->setName('close_btn');
        $this->addClass('btn btn-secondary btn-sm');
    }

}
