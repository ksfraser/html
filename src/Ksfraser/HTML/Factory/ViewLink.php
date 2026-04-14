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
 *
 * @package Ksfraser\HTML\Factory
 * @since 1.0.2 2026-02-20
 */
class ViewLink extends ActionLink {
/**
 * make
 *
 * @since v1.0.0 2026-04-13
 * @param mixed $id
 * @param ?string $text
 * @param array $params
 * @return self
 */
        public static function make($id, ?string $text = null, array $params = []): self {
            return new static($id, $text, $params);
        }
    protected string $label = 'View';
/**
 * __construct
 *
 * @since 1.0.2 2026-02-20
 * @param mixed $id
 * @param ?string $text
 * @param array $params
 * @return void
 */
    public function __construct($id, ?string $text = null, array $params = []) {
        parent::__construct(new \Ksfraser\HTML\Elements\HtmlString(''));
        $allParams = array_merge(['id' => $id], $params);
        $this->setAction('view', $allParams);
        $this->setText($text ?? $this->label);
    }
}
