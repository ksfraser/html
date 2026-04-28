<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\Attributes\HtmlNameValue;

/**
 * HtmlSelectRange
 *
 * Generates an HTML <select> populated with a consecutive integer range.
 *
 * Usage:
 * ```php
 * // Numbers 10–20, default selected: 15
 * $sel = new HtmlSelectRange('quantity', 1, 10, 5);
 * echo $sel->getHtml();
 * // <select name="quantity">
 * //   <option value="1">1</option>
 * //   ...
 * //   <option value="5" selected>5</option>
 * //   ...
 * //   <option value="10">10</option>
 * // </select>
 * ```
 *
 * @package Ksfraser\HTML\Elements
 * @author  Kevin Fraser
 * @since   20260428
 */
class HtmlSelectRange extends HtmlSelect
{
    /**
     * @param string   $name     The name attribute of the <select>.
     * @param int      $min      First integer in the range (inclusive).
     * @param int      $max      Last integer in the range (inclusive).
     * @param int|null $selected The integer value to mark as selected, or null for none.
     */
    public function __construct(string $name, int $min, int $max, ?int $selected = null)
    {
        parent::__construct(new HtmlNameValue($name));

        if ($min > $max) {
            [$min, $max] = [$max, $min];
        }

        for ($i = $min; $i <= $max; $i++) {
            $this->addOption(
                (string) $i,
                (string) $i,
                $selected !== null && $i === $selected
            );
        }
    }
}
