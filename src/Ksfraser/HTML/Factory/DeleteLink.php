<?php
namespace Ksfraser\HTML\Factory;

use Ksfraser\HTML\Factory\ActionLink;
use Ksfraser\HTML\Elements\HtmlA;

/**
 * DeleteLink - Specialized link for delete actions
 *
 * Extends ActionLink with defaults for delete operations.
 * Requires an ID parameter and includes confirmation prompt.
 *
 *
 * @package Ksfraser\HTML\Factory
 * @since 1.0.2 2026-02-20
 */
class DeleteLink extends ActionLink {
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
/**
 * setConfirmMessage
 *
 * @since 1.0.2 2026-02-20
 * @param string $message
 * @return self
 */
    public function setConfirmMessage(string $message): self {
        $this->confirmMessage = $message;
        $this->setAttribute('onclick', 'return confirm("' . addslashes($this->confirmMessage) . '");');
        return $this;
    }

/**
 * getConfirmMessage
 *
 * @since 1.0.2 2026-02-20
 * @return string
 */
    public function getConfirmMessage(): string {
        return $this->confirmMessage;
    }
    protected string $label = 'Delete';
    protected string $confirmMessage = 'Are you sure you want to delete this item?';
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
        $this->setAction('delete', $allParams);
        $this->setText($text ?? $this->label);
        $this->setAttribute('onclick', 'return confirm("' . addslashes($this->confirmMessage) . '");');
    }
}
