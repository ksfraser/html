<?php
namespace Ksfraser\HTML;

use Ksfraser\HTML\Elements\HtmlRaw;

/**
 * HtmlScriptLanguage
 *
 * Abstract base for valid script language wrappers (e.g., JS, JSON, TypeScript, VBScript).
 * Uses HtmlRaw so script contents are emitted unescaped inside <script> tags.
 *
 * @since 1.0.5 2026-02-22
 */
abstract class HtmlScriptLanguage extends HtmlRaw {
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param mixed $content
 * @return void
 */
    public function __construct($content) {
        if ($content instanceof \Ksfraser\HTML\HtmlElementInterface) {
            $content = $content->getHtml();
        }
        parent::__construct((string)$content);
    }
}
