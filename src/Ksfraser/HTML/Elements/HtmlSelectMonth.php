<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\Attributes\HtmlNameValue;

/**
 * HtmlSelectMonth
 *
 * Generates an HTML <select> whose options are the twelve calendar months.
 * Option values are zero-padded two-digit month numbers ("01"–"12").
 * Option labels are full English month names (January–December).
 *
 * Usage:
 * ```php
 * // Month selector, April pre-selected
 * $sel = new HtmlSelectMonth('month', '04');
 * echo $sel->getHtml();
 * // <select name="month">
 * //   <option value="01">January</option>
 * //   ...
 * //   <option value="04" selected>April</option>
 * //   ...
 * //   <option value="12">December</option>
 * // </select>
 * ```
 *
 * @package Ksfraser\HTML\Elements
 * @author  Kevin Fraser
 * @since   20260428
 */
class HtmlSelectMonth extends HtmlSelect
{
    /** @var string[] Full English month names, indexed 1–12 */
    private const MONTH_NAMES = [
        1  => 'January',
        2  => 'February',
        3  => 'March',
        4  => 'April',
        5  => 'May',
        6  => 'June',
        7  => 'July',
        8  => 'August',
        9  => 'September',
        10 => 'October',
        11 => 'November',
        12 => 'December',
    ];

    /**
     * @param string      $name     The name attribute of the <select>.
     * @param string|null $selected Two-digit month value to pre-select ("01"–"12"), or null for none.
     */
    public function __construct(string $name, ?string $selected = null)
    {
        parent::__construct(new HtmlNameValue($name));

        foreach (self::MONTH_NAMES as $num => $label) {
            $value = sprintf('%02d', $num);
            $this->addOption($value, $label, $selected !== null && $selected === $value);
        }
    }
}
