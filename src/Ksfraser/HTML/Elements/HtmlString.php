<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * HtmlString

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

 * This class is a simple wrapper for a string to implement the HtmlElementInterface.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * NOTE: HtmlNameValue extends this class because their implementations are currently identical.

 * 

 * 

 * 

 * If HtmlString is refactored or its implementation changes, HtmlNameValue should be re-examined for correctness.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * NOTE: For semantic clarity, use HtmlJSString when representing JavaScript content in HTML elements (e.g., <script> tags).

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

 * @since v1.0.0 2026-04-11

 * @return void

 */
/**
 * HtmlString
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlString implements HtmlElementInterface
{

        protected $string;

/**

 * __construct

 *

 * @since v1.0.0 2026-04-13

 * @param mixed $string

 * @return void

 */
        public /**
 * __construct
 *
 * @param mixed $string
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $string
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $string
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $string
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $string
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $string
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $string
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $string
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $string
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $string
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $string
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $string
 * @return void
 */
function __construct( $string )
        {
                if ($string instanceof \Ksfraser\HTML\HtmlElementInterface) {
                    $this->string = $string->getHtml();
                } else {
                    $this->string = (string)$string;
                }
        }
        /**
         * Renders the object in HTML.
         *
         * 
         * 
         * The Html is echoed directly into the output.
         * 
         * 
         * 
         *
         * @since v1.0.0 2026-04-13
         * @return void
         */
        public /**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function toHtml(): void {
                echo $this->getHtml();
        }
        
        /**
        
         * Get HTML representation as string
        
         *
        
         * @since v1.0.0 2026-04-13
        
         * @return string HTML-escaped string
        
         */
        public /**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getHtml(): string
        {
                //A HTML string doesn't have tags, attributes, styles, etc.
                //Escape the string to prevent XSS vulnerabilities.
                return htmlspecialchars($this->string, ENT_QUOTES, 'UTF-8');
        }
}
