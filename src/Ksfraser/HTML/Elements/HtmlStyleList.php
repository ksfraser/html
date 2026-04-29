<?php


namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\Attributes\HtmlAttributeValueObject;

/**//**
* A Style is an attribute with KEY Style and value param:setting
*
*	https://www.w3schools.com/html/html_styles.asp
*
*	Examples
*		background-color
*		color
*		font-family
*		font-size
*		text-align
*/
class HtmlStyleList extends HtmlAttributeValueObject

{
    public function __construct()
    {
        $this->attributeName = 'style';
        $this->attributeArray = [];
    }

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
