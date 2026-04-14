<?php
namespace Ksfraser\HTML\Factory;

use Ksfraser\HTML\Elements\HtmlA;

/**

 * ActionLink - Specialized link for action-based URLs

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Extends HtmlA to provide convenient methods for common CRUD action links.

 * 

 * 

 * 

 * Automatically constructs query string URLs with action parameter.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Common actions: create, edit, update, delete, view, list, admin

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * SRP: Single responsibility of building action-based links

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *

 * @since 1.0.1 2026-02-16

 * @package Ksfraser\HTML\Elements

 * @return void

 */
/**
 * ActionLink
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class ActionLink extends HtmlA {
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param ?\Ksfraser\HTML\HtmlElementInterface $data
 * @param ?\Ksfraser\HTML\HtmlElementInterface $maybeContent
 * @return void
 */
    public /**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $maybeContent
 * @return void
 */
function __construct(?\Ksfraser\HTML\HtmlElementInterface $data = null, ?\Ksfraser\HTML\HtmlElementInterface $maybeContent = null)
    {
        parent::__construct($data ?? new \Ksfraser\HTML\Elements\HtmlString(''), $maybeContent ?? null);
    }
    /**
     * Set action parameter for URL
     *
     * @since 1.0.1 2026-02-16
     * @param string $action Action name (create, edit, delete, etc.)
     * @param array $params Additional query parameters
     * @return self
     */
    public /**
 * setAction
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $action
 * @param mixed $params
 * @return self
 */
function setAction(string $action, array $params = []): self {
        $queryParams = array_merge(['action' => $action], $params);
        $queryString = http_build_query($queryParams);
        $this->setHref('?' . $queryString);
        return $this;
    }
    
    /**
    
     * Create a "Create" action link
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string $text Link text (default: "Create")
    
     * @return self
    
     */
    public static /**
 * create
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $text
 * @return self
 */
function create(string $text = 'Create'): self {
        return (new self(new \Ksfraser\HTML\Elements\HtmlString('')))
            ->setAction('create')
            ->setText($text);
    }
    
    /**
    
     * Create an "Edit" action link
    
     *
    
     * @since v1.0.5 2026-04-14
    
     * @param mixed $id
    
     * @param string $text
    
     * @return self
    
     */
public static /**
 * edit
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @param mixed $text
 * @return self
 */
function edit($id, string $text = 'Edit'): self {
        return (new self(new \Ksfraser\HTML\Elements\HtmlString('')))
            ->setAction('edit', ['id' => $id])
            ->setText($text);
    }
    
    /**
    
     * Create a "View" action link
    
     *
    
     * @since v1.0.5 2026-04-14
    
     * @param mixed $id
    
     * @param string $text
    
     * @return self
    
     */
public static /**
 * view
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @param mixed $text
 * @return self
 */
function view($id, string $text = 'View'): self {
        return (new self(new \Ksfraser\HTML\Elements\HtmlString('')))
            ->setAction('view', ['id' => $id])
            ->setText($text);
    }
    
    /**
    
     * Create a "Delete" action link
    
     *
    
     * @since v1.0.5 2026-04-14
    
     * @param mixed $id
    
     * @param string $text
    
     * @return self
    
     */
public static /**
 * delete
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @param mixed $text
 * @return self
 */
function delete($id, string $text = 'Delete'): self {
        return (new self(new \Ksfraser\HTML\Elements\HtmlString('')))
            ->setAction('delete', ['id' => $id])
            ->setText($text)
            ->setAttribute('onclick', 'return confirm("Are you sure you want to delete this item?");');
    }
    
    /**
    
     * Create a "List" action link
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string $text Link text (default: "List")
    
     * @return self
    
     */
    public static /**
 * listAll
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $text
 * @return self
 */
function listAll(string $text = 'List'): self {
        return (new self(new \Ksfraser\HTML\Elements\HtmlString('')))
            ->setAction('list')
            ->setText($text);
    }
    
    /**
    
     * Create an "Admin" action link
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string $subAction Optional sub-action
    
     * @param string $text Link text (default: "Admin")
    
     * @return self
    
     */
    public static /**
 * admin
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $subAction
 * @param mixed $text
 * @return self
 */
function admin(string $subAction = '', string $text = 'Admin'): self {
        $link = (new self(new \Ksfraser\HTML\Elements\HtmlString('')))->setText($text);
        
        if ($subAction) {
            $link->setAction('admin_' . $subAction);
        } else {
            $link->setAction('admin');
        }
        
        return $link;
    }
    
    /**
    
     * Create a custom action link
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string $action Custom action name
    
     * @param string $text Link text
    
     * @param array $params Additional parameters
    
     * @return self
    
     */
    public static /**
 * custom
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $action
 * @param mixed $text
 * @param mixed $params
 * @return self
 */
function custom(string $action, string $text, array $params = []): self {
        return (new self(new \Ksfraser\HTML\Elements\HtmlString('')))
            ->setAction($action, $params)
            ->setText($text);
    }
    /**
     * Set the label for this add link
     *
     * @since v1.0.0 2026-04-13
     * @param string $label
     * @return self
     */
    public /**
 * setLabel
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @return self
 */
function setLabel(string $label): self {
        $this->label = $label;
        $this->setText($label);
        return $this;
    }
    /**
     * Get the current label
     *
     * @since v1.0.0 2026-04-13
     * @return string
     */
    public /**
 * getLabel
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getLabel(): string {
        return $this->label;
    }
}

