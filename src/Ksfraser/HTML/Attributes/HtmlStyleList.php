<?php

namespace Ksfraser\HTML\Attributes;

use Ksfraser\HTML\Attributes\HtmlAttributeValueObject;

/**
 * HtmlStyleList represents the value for a style attribute as a collection of CSS property-value pairs.
 * It is not a standalone HTML element, but an attribute value object for use in other elements.
 *
 * Examples:
 *   background-color
 *   color
 *   font-family
 *   font-size
 *   text-align
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlStyleList extends HtmlAttributeValueObject
{
    /**
     * Constructor
     *
     * @param mixed $style
     * @return void
 * @since v1.0.5 2026-04-14
     */
    public function __construct($style = null)
    {
        $this->attributeName = 'style';
        $this->attributeArray = [];
        if ($style === null) {
            return;
        }

        if (is_array($style)) {
            foreach ($style as $s) {
                if (is_string($s)) {
                    $this->addAttribute(new class($s) {
                        private $s;
/**
 * __construct
 *
 * @since 1.0.3 2026-02-21
 * @param mixed $s
 * @return void
 */
                        public function __construct($s) { $this->s = $s; }
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-13
 * @return string
 */
                        public function getHtml(): string { return $this->s . ';'; }
                    });
                } else {
                    $this->addAttribute($s);
                }
            }
            return;
        }

        if (is_string($style)) {
            $this->addAttribute(new class($style) {
                private $s;
/**
 * __construct
 *
 * @since 1.0.3 2026-02-21
 * @param mixed $s
 * @return void
 */
                public function __construct($s) { $this->s = $s; }
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-13
 * @return string
 */
                public function getHtml(): string { return $this->s . ';'; }
            });
            return;
        }

        $this->addAttribute($style);
    }

    /**
     * Add a style to the list (type safe)
     *
     * @param mixed $style
     * @return void
 * @since v1.0.5 2026-04-14
     */
    public function addAttribute($style): void
    {
        parent::addAttributeValueObject($style);
    }

    /**
     * Set (add or replace) a style in the list by property name (type safe)
     *
     * @param mixed $style
     * @return void
 * @since v1.0.5 2026-04-14
     */
    public function setAttribute($style): void
    {
        $this->addAttribute($style);
    }

/**
 * getAttributeValueString
 *
 * @since 1.0.3 2026-02-21
 * @return string
 */
    protected function getAttributeValueString(): string
    {
        if (count($this->attributeArray) === 0) {
            return '';
        }
        $value = '';
        foreach ($this->attributeArray as $style) {
            $value .= $style->getHtml();
        }
        return $value;
    }
}
