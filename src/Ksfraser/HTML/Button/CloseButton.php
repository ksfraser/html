<?php
namespace Ksfraser\HTML\Button;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**

 * class CloseButton

 *

 * @since 1.0.4 2026-02-21

 * @return void

 */
class CloseButton extends Button {
/**
 * __construct
 *
 * @since v2.0.1 2026-04-12
 * @param mixed $label
 * @return void
 */
    public function __construct($label = null) {
        if ($label === null) {
            $label = new HtmlString('Close');
        }
        parent::__construct($label);
        $this->setName('close_btn');
        $this->addClass('btn btn-secondary btn-sm');
    }

}
