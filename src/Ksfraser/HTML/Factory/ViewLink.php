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
        public static function make($id, ?string $text = null, array $params = []): self {
            return new static($id, $text, $params);
        }
    protected $label = 'View';
    /**
     * @param int|string  $id     Record identifier appended to the URL as `id=`.
     * @param string|null $text   Link label text. Defaults to "View".
     * @param array       $params Additional URL query parameters merged with the id.
     */
    public function __construct($id, ?string $text = null, array $params = []) {
        parent::__construct();
        $allParams = array_merge(['id' => $id], $params);
        $this->setAction('view', $allParams);
        $this->setText($text ?? $this->label);
    }
}
