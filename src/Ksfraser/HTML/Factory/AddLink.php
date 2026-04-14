<?php
namespace Ksfraser\HTML\Factory;

use Ksfraser\HTML\Factory\ActionLink;
use Ksfraser\HTML\Elements\HtmlA;

/**
 * AddLink - Specialized link for add actions
 *
 * Extends ActionLink with defaults for add operations.
 * Similar to Create but uses "add" action name.
 *
 *
 * @package Ksfraser\HTML\Factory
 * @since 1.0.2 2026-02-20
 */
class AddLink extends ActionLink {
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
    /**
     * @var string Default label for add links
     */
    protected string $label = 'Add';
    
    /**
     * Constructor
     * 
 * @param ?string $text
 * @param array $params
 * @return void
 * @since v1.0.5 2026-04-14
 */
public function __construct(?string $text = null, array $params = []) {
        parent::__construct(new \Ksfraser\HTML\Elements\HtmlString(''));
        $this->setAction('add', $params);
        $this->setText($text ?? $this->label);
    }
}

