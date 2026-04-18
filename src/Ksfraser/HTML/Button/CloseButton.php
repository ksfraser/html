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
/**
 * CloseButton
 *
 * @since v1.0.0 2026-04-14
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
            $label = new HtmlString('Close');
        }
        parent::__construct($label);
        $this->setName('close_btn');
        $this->addClass('btn btn-secondary btn-sm');
    }

}
