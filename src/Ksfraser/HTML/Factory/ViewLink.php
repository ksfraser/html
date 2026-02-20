<?php
namespace Ksfraser\HTML\Factory;

use Ksfraser\HTML\Factory\ActionLink;
use Ksfraser\HTML\Elements\HtmlA;

/**
 * ViewLink - Specialized link for view actions
 * 
 * Extends ActionLink with defaults for view operations.
 * Requires an ID parameter.
 * 
 * @package Ksfraser\HTML\Factory
 */
class ViewLink extends ActionLink {
    protected string $label = 'View';
    public function __construct($id, ?string $text = null, array $params = []) {
        parent::__construct();
        $allParams = array_merge(['id' => $id], $params);
        $this->setAction('view', $allParams);
        $this->setText($text ?? $this->label);
    }
}
