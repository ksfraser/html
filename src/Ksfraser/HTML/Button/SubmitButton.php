<?php
namespace Ksfraser\HTML\Button;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * SubmitButton - Pre-styled form submit button
 *
 * Renders a <button type="submit"> with Bootstrap classes `btn btn-primary btn-sm`
 * and name="submit_btn". Default label is "Submit".
 *
 * @package Ksfraser\HTML\Button
 */
class SubmitButton extends Button {
    /**
     * @param string|HtmlElementInterface|null $label Button label text or wrapped element.
     *                                                  Defaults to "Submit".
     */
    public function __construct(string|HtmlElementInterface|null $label = null) {
        if ($label === null) {
            $label = new HtmlString('Submit');
        }
        parent::__construct($label);
        $this->setType('submit');
        $this->setName('submit_btn');
        $this->addClass('btn btn-primary btn-sm');
    }

}
