<?php
namespace Ksfraser\HTML\Button;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**

 * class SubmitButton

 *

 * @since 1.0.4 2026-02-21

 */
class SubmitButton extends Button {
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param mixed $label
 * @return void
 */
    public function __construct($label = null) {
        if ($label === null) {
            $label = new HtmlString('Submit');
        }
        parent::__construct($label);
        $this->setType('submit');
        $this->setName('submit_btn');
        $this->addClass('btn btn-primary btn-sm');
    }

}
