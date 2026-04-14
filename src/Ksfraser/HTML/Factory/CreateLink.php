<?php
namespace Ksfraser\HTML\Factory;

use Ksfraser\HTML\Factory\ActionLink;
use Ksfraser\HTML\Elements\HtmlA;

/**
 * CreateLink - Specialized link for create actions
 *
 * Extends ActionLink with defaults for create operations.
 *
 *
 * @package Ksfraser\HTML\Factory
 * @since 1.0.2 2026-02-20
 */
class CreateLink extends ActionLink {
/**
 * make
 *
 * @since v1.0.0 2026-04-13
 * @param ?string $text
 * @param array $params
 * @return self
 */
        public static function make(?string $text = null, array $params = []): self {
            return new static($text, $params);
        }
    protected string $label = 'Create';
/**
 * __construct
 *
 * @since 1.0.2 2026-02-20
 * @param ?string $text
 * @param array $params
 * @return void
 */
    public function __construct(?string $text = null, array $params = []) {
        parent::__construct(new \Ksfraser\HTML\Elements\HtmlString(''));
        $this->setAction('create', $params);
        $this->setText($text ?? $this->label);
    }
}
