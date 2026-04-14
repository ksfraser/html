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
    public function __construct(string|HtmlElementInterface|null $data = null) {
        parent::__construct($data);
        $this->setTag('button');
    }
}
