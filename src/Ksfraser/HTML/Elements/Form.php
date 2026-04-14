<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlAttribute;

/**

 * Form - Factory/convenience wrapper for HTML form element

 *

 * 

 * Provides fluent interface for building forms.

 * 

 * Usage:

 * - (new Form())->setMethod('post')->setAction('/submit')->append($field1, $field2)->render()

 * 

 * 

 *

 * @since v1.0.0 2026-04-11

 * @package Ksfraser\HTML\Elements

 */
class Form {
    private $form;

/**

 * __construct

 *

 * @since v1.0.0 2026-04-13

 * @return void

 */
    public function __construct() {
        $this->form = new HtmlForm(new HtmlString(''));
    }

/**

 * getHtmlElement

 *

 * @since v1.0.0 2026-04-11

 * @return HtmlForm

 */
    public function getHtmlElement(): HtmlForm {
        return $this->form;
    }

/**

 * __call

 *

 * @since v1.0.0 2026-04-11

 * @param mixed $name

 * @param mixed $arguments

 * @return void

 */
    public function __call($name, $arguments) {
        // Delegate all method calls to HtmlForm
        if (method_exists($this->form, $name)) {
            return call_user_func_array([$this->form, $name], $arguments);
        }
        throw new \BadMethodCallException("Method $name does not exist on Form or HtmlForm");
    }

/**

 * getHtml

 *

 * @since v1.0.0 2026-04-11

 * @return string

 */
    public function getHtml(): string {
        return $this->form->getHtml();
    }

    
    /**

    
     * Render the form to HTML string

    
     *

    
     * @since v1.0.0 2026-04-13

    
     * @return string The complete HTML form element

    
     */
    public function render(): string {
        return $this->getHtml();
    }
}
