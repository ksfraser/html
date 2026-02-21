<?php
namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * HtmlScriptLanguage
 *
 * Abstract base for valid script language wrappers (e.g., JS, JSON, TypeScript, VBScript).
 * Extends HtmlElement for consistent element behavior.
 */
abstract class HtmlScriptLanguage extends HtmlElement implements HtmlElementInterface {
    public function __construct(HtmlElementInterface $content) {
        if (!$content instanceof HtmlString) {
            throw new \InvalidArgumentException('HtmlScriptLanguage content must be an instance of HtmlString');
        }
        parent::__construct($content);
    }
    
        /**
         * Returns the concatenated HTML of all nested elements.
         */
        public function getHtml(): string
        {
            $html = '';
            foreach ($this->nested as $child) {
                $html .= $child->getHtml();
            }
            return $html;
        }
}
