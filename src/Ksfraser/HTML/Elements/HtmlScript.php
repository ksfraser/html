<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlScriptLanguage;

/**
 * HtmlScript - Script Tag Container
 * 
 * Represents an HTML <script> element for including JavaScript code.
 * Can contain inline JavaScript or reference external scripts.
 * 
 * Design Pattern: Builder Pattern
 * - Fluent interface for setting attributes and content
 * 
 * SOLID Principles:
 * - Single Responsibility: Renders script tags only
 * - Open/Closed: Can be extended for specialized script types
 * - Liskov Substitution: Can replace HtmlElement
 * - Interface Segregation: Uses HtmlElement appropriately
 * - Dependency Inversion: Depends on HtmlElement abstraction
 * 
 * Security Note:
 * - Inline scripts are vulnerable to XSS attacks
 * - Always sanitize content from user input
 * - Consider Content Security Policy (CSP) for script restrictions
 * 
 * @package    Ksfraser\HTML
 * @author     Kevin Fraser / GitHub Copilot
 * @since      20251220
 * @version    1.0.0
 * 
 * @example
 * ```php
 * // Inline script
 * $script = new HtmlScript(null, new \Ksfraser\HTML\Javascript\HtmlJSString("console.log('Hello, World!');"));
 * echo $script->getHtml();
 * // Output: <script type="text/javascript">console.log('Hello, World!');</script>
 * 
 * // External script reference
 * $script = new HtmlScript();
 * $script->setAttribute('src', '/path/to/script.js');
 * $script->setAttribute('async', 'async');
 * echo $script->getHtml();
 * // Output: <script src="/path/to/script.js" async></script>
 * 
 * // With JSON content
 * $jsonScript = new HtmlScript('application/json', new \Ksfraser\HTML\Json\HtmlJsonString('{"key": "value"}'));
 * echo $jsonScript->getHtml();
 * // Output: <script type="application/json">{"key": "value"}</script>
 * ```
 */
class HtmlScript extends HtmlElement
{
    /**
     * Constructor
     *
     * @param string|null $type    Optional script type (defaults to 'text/javascript')
     * @param HtmlScriptLanguage|null $content Optional script content (must be a valid script language wrapper)
     */
    public function __construct($type = null, ?\Ksfraser\HTML\HtmlScriptLanguage $content = null)
    {
        parent::__construct();
        $this->tagName = 'script';
        if ($type) {
            $this->setAttribute('type', $type);
        } else {
            $this->setAttribute('type', 'text/javascript');
        }
        if ($content) {
            $this->addNested($content);
        }
    }
}
