<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

/**
 * HtmlMeter
 *
 * Represents an HTML <meter> element for a scalar measurement within a known range.
 *
 * Usage:
 * ```php
 * $m = new HtmlMeter(60.0, 0.0, 100.0);
 * $m->setLow(25.0)->setHigh(75.0)->setOptimum(50.0);
 * echo $m->getHtml();
 * // <meter value="60" min="0" max="100" low="25" high="75" optimum="50"></meter>
 * ```
 *
 * @package Ksfraser\HTML\Elements
 * @author  Kevin Fraser
 * @since   20260429
 */
class HtmlMeter extends HtmlElement
{
    /**
     * @param float|null $value   The measured value
     * @param float|null $min     Lower bound of the range
     * @param float|null $max     Upper bound of the range
     */
    public function __construct(?float $value = null, ?float $min = null, ?float $max = null)
    {
        parent::__construct();
        $this->setTag('meter');

        if ($value !== null) {
            $this->setValue($value);
        }
        if ($min !== null) {
            $this->setMin($min);
        }
        if ($max !== null) {
            $this->setMax($max);
        }
    }

    /** @param float $value @return self */
    public function setValue(float $value): self
    {
        return $this->setAttribute('value', $this->formatFloat($value));
    }

    /** @param float $min @return self */
    public function setMin(float $min): self
    {
        return $this->setAttribute('min', $this->formatFloat($min));
    }

    /** @param float $max @return self */
    public function setMax(float $max): self
    {
        return $this->setAttribute('max', $this->formatFloat($max));
    }

    /** @param float $low @return self */
    public function setLow(float $low): self
    {
        return $this->setAttribute('low', $this->formatFloat($low));
    }

    /** @param float $high @return self */
    public function setHigh(float $high): self
    {
        return $this->setAttribute('high', $this->formatFloat($high));
    }

    /** @param float $optimum @return self */
    public function setOptimum(float $optimum): self
    {
        return $this->setAttribute('optimum', $this->formatFloat($optimum));
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
