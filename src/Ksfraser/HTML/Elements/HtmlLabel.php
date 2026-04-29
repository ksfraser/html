<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

/**
 * HtmlLabel
 *
 * Represents an HTML <label> element.
 *
 * Usage:
 * ```php
 * $label = new HtmlLabel('email', 'Email Address');
 * echo $label->getHtml();
 * // <label for="email">Email Address</label>
 *
 * // Fluent:
 * $label = (new HtmlLabel())->setFor('name')->setText('Full Name');
 * ```
 *
 * @package Ksfraser\HTML\Elements
 * @author  Kevin Fraser
 * @since   20260429
 */
class HtmlLabel extends HtmlElement
{
    /**
     * @param string|null $for  Value for the `for` attribute (id of the labelled control)
     * @param string|null $text Text content of the label
     */
    public function __construct(?string $for = null, ?string $text = null)
    {
        parent::__construct();
        $this->setTag('label');

        if ($for !== null) {
            $this->setFor($for);
        }

        if ($text !== null) {
            $this->setTextContent($text);
        }
    }

    /**
     * Set the `for` attribute (should match the `id` of the associated control).
     *
     * @param string $for
     * @return self
     */
    public function setFor(string $for): self
    {
        return $this->setAttribute('for', $for);
    }

    /**
     * Set the visible text of the label. Text is HTML-escaped on render.
     *
     * @param string $text
     * @return self
     */
    public function setText(string $text): self
    {
        return $this->setTextContent($text);
    }
}
