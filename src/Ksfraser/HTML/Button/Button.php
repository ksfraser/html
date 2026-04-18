<?php
namespace Ksfraser\HTML\Button;

use Ksfraser\HTML\Button\HtmlButton;
use Ksfraser\HTML\JS\HtmlJsEventTrait;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**

 * Button - HTML <button> element abstraction

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Usage:

 * 

 * 

 * 

 * - (new Button('Click Me'))->addClass('btn-primary')->setType('submit')->render()

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *

 * @since 1.0.4 2026-02-21

 * @package Ksfraser\HTML\Button

 * @return void

 */
class Button extends HtmlButton {
    use HtmlJsEventTrait;

    /**

     * Constructor

     *

     * @since 1.0.4 2026-02-21

     * @param mixed $text

     * @return void

     */
    public function __construct($text = null) {
        parent::__construct();
        $this->setTag('button');
        if ($text !== null) {
            if (is_string($text)) {
                $text = new HtmlString(htmlspecialchars($text));
            }
            $this->addNested($text);
        }
    }

    /**

     * Set the text/content of the button

     *

     * @since v1.0.5 2026-04-14

     * @param mixed $text

     * @return self

     */
    public function setText($text): self {
        $this->nested = [];
        if (is_string($text)) {
            $text = new HtmlString(htmlspecialchars($text));
        }
        $this->addNested($text);
        return $this;
    }

    /**

     * Add a CSS class to the button

     *

     * @since v1.0.5 2026-04-14

     * @param string $class

     * @return self

     */
    public function addClass(string $class): self {
        // Support passing multiple classes separated by whitespace
        $parts = preg_split('/\s+/', trim($class));
        $this->addCSSClasses(array_values(array_filter($parts)));
        return $this;
    }

    /**

     * Set the button type attribute

     *

     * @since v1.0.5 2026-04-14

     * @param string $type

     * @return self

     */
    public function setType(string $type): self {
        $this->setAttribute('type', $type);
        return $this;
    }

    /**

     * Get HTML representation as string

     *

     * @since v1.0.5 2026-04-14

     * @return string

     */
    public function getHtml(): string {
        return parent::getHtml();
    }

    /**

     * Render the button to HTML string

     *

     * @since v1.0.5 2026-04-14

     * @return string

     */
    public function render(): string {
        return $this->getHtml();
    }

    /**

     * Set the name attribute

     *

     * @since v1.0.5 2026-04-14

     * @param string $name

     * @return self

     */
    public function setName(string $name): self {
        $this->setAttribute('name', $name);
        return $this;
    }

    /**

     * Set the class attribute directly (replace existing classes)

     *

     * @since v1.0.0 2026-04-13

     * @param string $class

     * @return self

     */
    public function setClass(string $class): self {
        $this->setAttribute('class', $class);
        return $this;
    }
}
