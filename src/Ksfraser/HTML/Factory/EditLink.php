<?php
namespace Ksfraser\HTML\Factory;

use Ksfraser\HTML\Factory\ActionLink;
use Ksfraser\HTML\Elements\HtmlA;

/**
 * EditLink - Specialized link for edit actions
 * 
 * Extends ActionLink with defaults for edit operations.
 * Requires an ID parameter.
 * 
 * @package Ksfraser\HTML\Factory
 */
class EditLink extends ActionLink {
        public static function make(int|string $id, ?string $text = null, array $params = []): self {
            return new static($id, $text, $params);
        }
    protected string $label = 'Edit';
    /**
     * @param int|string  $id     Record identifier appended to the URL as `id=`.
     * @param string|null $text   Link label text. Defaults to "Edit".
     * @param array       $params Additional URL query parameters merged with the id.
     */
    public function __construct(int|string $id, ?string $text = null, array $params = []) {
        parent::__construct();
        $allParams = array_merge(['id' => $id], $params);
        $this->setAction('edit', $allParams);
        $this->setText($text ?? $this->label);
    }
}
