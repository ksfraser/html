<?php

namespace Ksfraser\HTML\Traits;

use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * Trait for unified attribute handling (setAttribute, addAttribute)

 *

 * @since 1.0.4 2026-02-21

 */
trait HtmlAttributeTrait {
    /**
     *
     * @var \Ksfraser\HTML\HtmlAttributeList
     */
    protected $attributeList;

    /**

     * Initialize attribute list

     *

     * @since 1.0.4 2026-02-21

     * @return void

     */
    protected function initAttributeList(): void {
        $this->attributeList = new \Ksfraser\HTML\HtmlAttributeList();
    }
    /**
     * Add an HTML attribute object (HtmlAttribute or subclass)
     *
     * @since v1.0.0 2026-04-13
     * @param HtmlAttribute $attribute
     * @return self
     */
    public function addAttributeObject(HtmlAttribute $attribute): self {
        if (!isset($this->attributeList)) {
            $this->initAttributeList();
        }
        $this->attributeList->addAttributeObject($attribute);
        return $this;
    }
    /**
     * Add an HTML attribute by name and value (wraps setAttribute)
     *
     * @since v1.0.5 2026-04-14
     * @param mixed $name
     * @param mixed $value
     * @return self
     */
public function addAttribute($name, $value): self {
        return $this->setAttribute($name, $value);
    }

    /**

     * Convenience setter for an attribute by name/value.

     *

     * Accepts string or HtmlElementInterface for value.

     * Converts string to HtmlString for storage.

     *

     * @since v1.0.5 2026-04-14

     * @param string $name

     * @param mixed $value

     * @return self

     */
public function setAttribute(string $name, $value): self {
        if (!$value instanceof HtmlString) {
            $value = new HtmlString($value);
        }
        $attr = new HtmlAttribute($name, $value);
        if (method_exists($this->attributeList, 'setAttribute')) {
            $this->attributeList->setAttribute($attr);
        } else {
            $this->addAttributeObject($attr);
        }
        return $this;
    }
}

