<?php
namespace Ksfraser\HTML\Elements;

/**
 * ModalBuilder - Builder for modal dialogs
 *
 * Provides fluent interface for constructing modals.
 * SRP: Single responsibility of building complete modal structures.
 *
 *
 * @package Ksfraser\HTML\Elements
 * @since v1.0.0 2026-04-11
 */
class ModalBuilder {
    /**
     * @var Modal The modal being built
     */
    protected $modal;
    
    /**
     * @var ModalContent The modal content
     */
    protected $content;
    
    /**
     * Constructor
     * 
     * @param string $id Modal ID
 * @return void
 * @since v1.0.0 2026-04-11
     */
    public function __construct(string $id = 'modal') {
        $this->modal = new Modal($id);
        $this->content = new ModalContent();
    }
    
    /**
     * Add heading to modal
     * 
     * @param string $text Heading text
     * @param int $level Heading level (1-6)
     * @return self
 * @since v1.0.0 2026-04-13
     */
    public function addHeading(string $text, int $level = 2): self {
        $heading = new Heading($level);
        $heading->setText($text);
        $this->content->append($heading);
        return $this;
    }
    
    /**
     * Add paragraph to modal
     * 
     * @param string $text Paragraph text
     * @return self
 * @since v1.0.0 2026-04-13
     */
    public function addParagraph(string $text): self {
        $p = new \Ksfraser\HTML\Formatting\HtmlParagraph(new HtmlString($text));
        $this->content->append($p);
        return $this;
    }
    
    /**
     * Add table to modal
     * 
     * @param Table $table
     * @return self
 * @since v1.0.0 2026-04-13
     */
    public function addTable(Table $table): self {
        $this->content->append($table);
        return $this;
    }
    
    /**
     * Add close button
     * 
     * @param string $text Button text
     * @param string $onclickHandler JavaScript onclick handler
     * @return self
 * @since v1.0.0 2026-04-13
     */
    public function addCloseButton(string $text = 'Close', string $onclickHandler = 'closeModal()'): self {
        $button = new \Ksfraser\HTML\Button\CloseButton(new HtmlString($text));
        $button->setOnclickFunction($onclickHandler);
		$existing = $button->getAttributeValue('class') ?? '';
		$button->setClass(trim('modal-close-btn ' . $existing));
        $this->content->append($button);
        return $this;
    }
    
    /**
     * Add raw HTML content
     * 
     * @param string $html
     * @return self
 * @since v1.0.0 2026-04-13
     */
    public function addRawHtml(string $html): self {
        $this->content->append(new HtmlString($html));
        return $this;
    }
    
    /**
     * Build and return the modal
     * 
     * @return Modal
 * @since v1.0.0 2026-04-13
     */
    public function build(): Modal {
        $this->modal->setContent($this->content);
        return $this->modal;
    }
    
    /**
     * Get stylesheet link element for modal CSS
     * 
     * @return Stylesheet
 * @since v1.0.0 2026-04-13
     */
    public static function getStylesheet(): Stylesheet {
        return (new Stylesheet())
            ->setHref(Modal::getStylesheetPath())
            ->setRel('stylesheet');
    }
}
