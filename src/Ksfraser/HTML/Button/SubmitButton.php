<?php
namespace Ksfraser\HTML\Button;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**

 * class SubmitButton

 *

 * @since 1.0.4 2026-02-21

 * @return void

 */
/**
 * SubmitButton
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class SubmitButton extends Button {
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param mixed $label
 * @return void
 */
    public /**
 * __construct
 *
 * @param mixed $label
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $label
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @return void
 */
function __construct($label = null) {
        if ($label === null) {
            $label = new HtmlString('Submit');
        }
        parent::__construct($label);
        $this->setType('submit');
        $this->setName('submit_btn');
        $this->addClass('btn btn-primary btn-sm');
    }

}
