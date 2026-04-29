<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\Attributes\HtmlNameValue;

/**
 * HtmlSelectYear
 *
 * Generates an HTML <select> populated with a consecutive year range.
 *
 * Usage:
 * ```php
 * // Years 2000–2025 with 2024 pre-selected
 * $sel = new HtmlSelectYear('birth_year', 2000, 2025, 2024);
 * echo $sel->getHtml();
 * // <select name="birth_year">
 * //   <option value="2000">2000</option>
 * //   ...
 * //   <option value="2024" selected>2024</option>
 * //   <option value="2025">2025</option>
 * // </select>
 * ```
 *
 * @package Ksfraser\HTML\Elements
 * @author  Kevin Fraser
 * @since   20260429
 */
class HtmlSelectYear extends HtmlSelect
{
    /**
     * @param string   $name      The name attribute of the <select>.
     * @param int      $startYear First year in the range (inclusive).
     * @param int      $endYear   Last year in the range (inclusive).
     * @param int|null $selected  The year value to mark as selected, or null for none.
     */
    public function __construct(string $name, int $startYear, int $endYear, ?int $selected = null)
    {
        parent::__construct(new HtmlNameValue($name));

        for ($year = $startYear; $year <= $endYear; $year++) {
            $this->addOption(
                (string) $year,
                (string) $year,
                $selected !== null && $year === $selected
            );
        }
    }
}
