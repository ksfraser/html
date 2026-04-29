<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlAttribute;

/**
 * HtmlTextarea
 *
 * Represents an HTML <textarea> element.
 *
 * Usage:
 * ```php
 * $ta = new HtmlTextarea('bio');
 * $ta->setValue("Hello there")->setRows(4)->setPlaceholder("Tell us about yourself");
 * echo $ta->getHtml();
 * // <textarea name="bio" rows="4" placeholder="Tell us about yourself">Hello there</textarea>
 * ```
 *
 * @package Ksfraser\HTML\Elements
 * @author  Kevin Fraser
 * @since   20260428
 */
class HtmlTextarea extends HtmlElement
{
    /**
     * @param string|null $name  Optional name attribute set immediately.
     * @param string|null $value Optional initial text content.
     */
    public function __construct(?string $name = null, ?string $value = null)
    {
        parent::__construct();
        $this->setTag('textarea');

        if ($name !== null) {
            $this->setName($name);
        }
        if ($value !== null) {
            $this->setValue($value);
        }
    }

    /**
     * Set the name attribute.
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->addAttributeObject(new HtmlAttribute('name', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));
        return $this;
    }

    /**
     * Set the text content of the textarea.
     * The value will be HTML-escaped on render (via HtmlElement::renderChildrenHtml).
     *
     * @param string $value
     * @return self
     */
    public function setValue(string $value): self
    {
        return $this->setTextContent($value);
    }

    /**
     * Set the rows attribute.
     *
     * @param int $rows Visible row count
     * @return self
     */
    public function setRows(int $rows): self
    {
        $this->addAttributeObject(new HtmlAttribute('rows', (string) $rows));
        return $this;
    }

    /**
     * Set the cols attribute.
     *
     * @param int $cols Visible column count
     * @return self
     */
    public function setCols(int $cols): self
    {
        $this->addAttributeObject(new HtmlAttribute('cols', (string) $cols));
        return $this;
    }

    /**
     * Set the placeholder attribute.
     *
     * @param string $placeholder
     * @return self
     */
    public function setPlaceholder(string $placeholder): self
    {
        $this->addAttributeObject(new HtmlAttribute('placeholder', htmlspecialchars($placeholder, ENT_QUOTES, 'UTF-8')));
        return $this;
    }

    /**
     * Set the maxlength attribute.
     *
     * @param int $maxlength
     * @return self
     */
    public function setMaxlength(int $maxlength): self
    {
        $this->addAttributeObject(new HtmlAttribute('maxlength', (string) $maxlength));
        return $this;
    }

    /**
     * Set the disabled attribute.
     *
     * @param bool $disabled
     * @return self
     */
    public function setDisabled(bool $disabled = true): self
    {
        if ($disabled) {
            $this->addAttributeObject(new HtmlAttribute('disabled', 'disabled'));
        }
        return $this;
    }

    /**
     * Set the required attribute.
     *
     * @param bool $required
     * @return self
     */
    public function setRequired(bool $required = true): self
    {
        if ($required) {
            $this->addAttributeObject(new HtmlAttribute('required', 'required'));
        }
        return $this;
    }

    /**
     * Set the readonly attribute.
     *
     * @param bool $readonly
     * @return self
     */
    public function setReadonly(bool $readonly = true): self
    {
        if ($readonly) {
            $this->addAttributeObject(new HtmlAttribute('readonly', 'readonly'));
        }
        return $this;
    }
}
