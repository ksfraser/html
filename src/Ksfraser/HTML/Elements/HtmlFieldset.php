<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

/**
 * HtmlFieldset
 *
 * Represents an HTML <fieldset> element, used to group related form controls.
 *
 * Usage:
 * ```php
 * $fieldset = new HtmlFieldset();
 * $fieldset->setLegend(new HtmlLegend('Billing Address'));
 * echo $fieldset->getHtml();
 * // <fieldset><legend>Billing Address</legend></fieldset>
 *
 * // Disabled fieldset:
 * $fieldset->setDisabled();
 * ```
 *
 * @package Ksfraser\HTML\Elements
 * @author  Kevin Fraser
 * @since   20260429
 */
class HtmlFieldset extends HtmlElement
{
    public function __construct()
    {
        parent::__construct();
        $this->setTag('fieldset');
    }

    /**
     * Mark the fieldset (and all its descendants) as disabled.
     *
     * @param bool $disabled Pass false to remove the disabled attribute.
     * @return self
     */
    public function setDisabled(bool $disabled = true): self
    {
        if ($disabled) {
            return $this->setAttribute('disabled', 'disabled');
        }
        return $this->removeAttribute('disabled');
    }

    /**
     * Add a legend element as the first child of this fieldset.
     *
     * @param HtmlLegend $legend
     * @return self
     */
    public function addLegend(HtmlLegend $legend): self
    {
        return $this->addNested($legend);
    }
}
