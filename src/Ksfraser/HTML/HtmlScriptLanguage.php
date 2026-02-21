<?php
namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * HtmlScriptLanguage
 *
 * Abstract base for valid script language wrappers (e.g., JS, JSON, TypeScript, VBScript).
 * Use this as a type hint for script content in HtmlScript.
 */
abstract class HtmlScriptLanguage implements HtmlElementInterface {
    // No implementation; serves as a semantic base for script language wrappers.
}
