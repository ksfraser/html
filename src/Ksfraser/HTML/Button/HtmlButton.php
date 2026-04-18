<?php
namespace Ksfraser\HTML\Button;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\JS\HtmlJsEventTrait;

/**

 * HtmlButton - HTML <button> element abstraction

 *

 * @since 1.0.4 2026-02-21

 * @return void

 */
/**
 * HtmlButton
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlButton extends HtmlElement {
    use \Ksfraser\HTML\JS\HtmlJsEventTrait;

    /**

     * Constructor

     *

     * @since 1.0.4 2026-02-21

     * @param string|HtmlElementInterface|null $data Optional initial content or nested element

     * @return void

     */
    public /**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
function __construct(string|HtmlElementInterface|null $data = null) {
        parent::__construct($data);
        $this->setTag('button');
    }
}
