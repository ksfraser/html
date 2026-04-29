<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

/**
 * HtmlProgress
 *
 * Represents an HTML <progress> element for displaying task completion.
 *
 * Usage:
 * ```php
 * // Determinate progress bar (50 of 100)
 * $p = new HtmlProgress(50.0, 100.0);
 * echo $p->getHtml();
 * // <progress value="50" max="100"></progress>
 *
 * // Indeterminate (no value/max)
 * $p = new HtmlProgress();
 * echo $p->getHtml();
 * // <progress></progress>
 * ```
 *
 * @package Ksfraser\HTML\Elements
 * @author  Kevin Fraser
 * @since   20260429
 */
class HtmlProgress extends HtmlElement
{
    /**
     * @param float|null $value Current progress value
     * @param float|null $max   Maximum value (defaults to 1.0 per HTML spec if omitted)
     */
    public function __construct(?float $value = null, ?float $max = null)
    {
        parent::__construct();
        $this->setTag('progress');

        if ($value !== null) {
            $this->setValue($value);
        }
        if ($max !== null) {
            $this->setMax($max);
        }
    }

    /**
     * Set the current progress value.
     *
     * @param float $value
     * @return self
     */
    public function setValue(float $value): self
    {
        return $this->setAttribute('value', $this->formatFloat($value));
    }

    /**
     * Set the maximum value.
     *
     * @param float $max
     * @return self
     */
    public function setMax(float $max): self
    {
        return $this->setAttribute('max', $this->formatFloat($max));
    }

    /**
     * Format a float for use as an HTML attribute value.
     * Omits the decimal part when the value is a whole number.
     */
    private function formatFloat(float $v): string
    {
        return (floor($v) === $v) ? (string)(int)$v : (string)$v;
    }
}
