<?php
/*
 * Copyright (c) 2025 Kevin Fraser
 *
 * See the file LICENSE.txt for copying permission.
 */

namespace Ksfraser\HTML;

/**
 * Interface for HTML elements
 * Provides methods for both direct output and string return of HTML
 */
interface HtmlElementInterface {
        /**
         * Render the object in HTML.
         * The Html is echoed directly into the output by echo'ing getHtml.
         */
	public function toHtml():void;
        /**
         * Render HTML.
         * The Html is returned as a string without outputting
         * Equivalent to __toString
         */
        public function getHtml():string;
}
?>
