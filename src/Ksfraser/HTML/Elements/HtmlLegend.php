<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

/**
 * HtmlLegend
 *
 * Represents an HTML <legend> element (caption for a <fieldset>).
 *
 * Usage:
 * ```php
 * $legend = new HtmlLegend('Personal Information');
 * echo $legend->getHtml();
 * // <legend>Personal Information</legend>
 * ```
 *
 * @package Ksfraser\HTML\Elements
 * @author  Kevin Fraser
 * @since   20260429
 */
class HtmlLegend extends HtmlElement
{
    /**
     * @param string|null $text Text content of the legend
     */
    public function __construct(?string $text = null)
    {
        parent::__construct();
        $this->setTag('legend');

        if ($text !== null) {
            $this->setTextContent($text);
        }
    }

    /**
     * Set the text content of the legend. Text is HTML-escaped on render.
     *
     * @param string $text
     * @return self
     */
    public function setText(string $text): self
    {
        return $this->setTextContent($text);
    }
}
