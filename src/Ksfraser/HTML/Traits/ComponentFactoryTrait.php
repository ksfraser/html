<?php

namespace Ksfraser\HTML\Traits;

use Ksfraser\HTML\HtmlElement;

/**
 * ComponentFactoryTrait - FR-012
 * Provides builder methods for Bootstrap component creation
 *
 * Static factory methods for common Bootstrap components:
 * - Buttons: buttonPrimary(), buttonSuccess(), buttonDanger(), buttonWarning(), buttonInfo(), buttonSecondary()
 * - Cards: card(), cardHeader(), cardBody(), cardFooter(), cardImage(), cardText(), cardTitle(), cardSubtitle()
 * - Alerts: alertPrimary(), alertSuccess(), alertWarning(), alertDanger(), alertInfo()
 * - Badges: badgePrimary(), badgeSuccess(), badgeDanger(), badgeWarning(), badgeInfo(), badgeSecondary()
 * - Modals: modal(), modalDialog(), modalContent(), modalHeader(), modalBody(), modalFooter()
 * - Navbars: navbar(), navbarBrand(), navbarNav(), navbarItem(), navbarLink(), navbarToggler()
 * - Pagination: pagination(), paginationList(), paginationItem(), paginationLink(), paginationPrevious(), paginationNext()
 *
 * Integration with previous traits:
 * - CSSManagementTrait: Bootstrap classes automatically applied
 * - AriaAttributeTrait: Accessibility attributes (roles, aria-*)
 * - DataAttributeTrait: Data attributes for JS integration
 * - EventHandlerTrait: Event binding for interactive components
 *
 * Usage:
 *   $button = HtmlElement::buttonPrimary('Click Me');
 *   $card = HtmlElement::card()
 *       ->addNested(HtmlElement::cardHeader('Title'))
 *       ->addNested(HtmlElement::cardBody('Content'));
 *   $alert = HtmlElement::alertSuccess('Operation successful', true);
 *
 * @package Ksfraser\HTML\Traits
 * @since 1.0
 */
trait ComponentFactoryTrait
{
    // ========================================================================
    // BUTTON COMPONENTS
    // ========================================================================

    /**
     * Create a primary button
     *
     * @param string $text Button text/label
     * @param string $type Button type (button, submit, reset)
     * @return HtmlElement
     *
     * @example
     *   $btn = HtmlElement::buttonPrimary('Click Me', 'submit');
     */
    public static function buttonPrimary(string $text = '', string $type = 'button'): HtmlElement
    {
        $button = new self('button', $text);
        $button->setAttribute('type', $type);
        $button->addCSSClass('btn');
        $button->addCSSClass('btn-primary');
        return $button;
    }

    /**
     * Create a success button
     *
     * @param string $text Button text/label
     * @param string $type Button type
     * @return HtmlElement
     */
    public static function buttonSuccess(string $text = '', string $type = 'button'): HtmlElement
    {
        $button = new self('button', $text);
        $button->setAttribute('type', $type);
        $button->addCSSClass('btn');
        $button->addCSSClass('btn-success');
        return $button;
    }

    /**
     * Create a danger button
     *
     * @param string $text Button text/label
     * @param string $type Button type
     * @return HtmlElement
     */
    public static function buttonDanger(string $text = '', string $type = 'button'): HtmlElement
    {
        $button = new self('button', $text);
        $button->setAttribute('type', $type);
        $button->addCSSClass('btn');
        $button->addCSSClass('btn-danger');
        return $button;
    }

    /**
     * Create a warning button
     *
     * @param string $text Button text/label
     * @param string $type Button type
     * @return HtmlElement
     */
    public static function buttonWarning(string $text = '', string $type = 'button'): HtmlElement
    {
        $button = new self('button', $text);
        $button->setAttribute('type', $type);
        $button->addCSSClass('btn');
        $button->addCSSClass('btn-warning');
        return $button;
    }

    /**
     * Create an info button
     *
     * @param string $text Button text/label
     * @param string $type Button type
     * @return HtmlElement
     */
    public static function buttonInfo(string $text = '', string $type = 'button'): HtmlElement
    {
        $button = new self('button', $text);
        $button->setAttribute('type', $type);
        $button->addCSSClass('btn');
        $button->addCSSClass('btn-info');
        return $button;
    }

    /**
     * Create a secondary button
     *
     * @param string $text Button text/label
     * @param string $type Button type
     * @return HtmlElement
     */
    public static function buttonSecondary(string $text = '', string $type = 'button'): HtmlElement
    {
        $button = new self('button', $text);
        $button->setAttribute('type', $type);
        $button->addCSSClass('btn');
        $button->addCSSClass('btn-secondary');
        return $button;
    }

    // ========================================================================
    // CARD COMPONENTS
    // ========================================================================

    /**
     * Create a card container
     *
     * @return HtmlElement
     * @example
     *   $card = HtmlElement::card();
     */
    public static function card(): HtmlElement
    {
        $card = new self('div');
        $card->addCSSClass('card');
        return $card;
    }

    /**
     * Create a card header
     *
     * @param string $text Header text
     * @return HtmlElement
     */
    public static function cardHeader(string $text = ''): HtmlElement
    {
        $header = new self('div', $text);
        $header->addCSSClass('card-header');
        return $header;
    }

    /**
     * Create a card body
     *
     * @param string $text Body text (optional)
     * @return HtmlElement
     */
    public static function cardBody(string $text = ''): HtmlElement
    {
        $body = new self('div', $text);
        $body->addCSSClass('card-body');
        return $body;
    }

    /**
     * Create a card footer
     *
     * @param string $text Footer text (optional)
     * @return HtmlElement
     */
    public static function cardFooter(string $text = ''): HtmlElement
    {
        $footer = new self('div', $text);
        $footer->addCSSClass('card-footer');
        return $footer;
    }

    /**
     * Create a card image
     *
     * @param string $src Image source
     * @param string $alt Alternative text
     * @return HtmlElement
     */
    public static function cardImage(string $src, string $alt = ''): HtmlElement
    {
        $image = new self('img');
        $image->setAttribute('src', $src);
        if ($alt !== '') {
            $image->setAttribute('alt', $alt);
        }
        $image->addCSSClass('card-img-top');
        return $image;
    }

    /**
     * Create a card text element
     *
     * @param string $text Text content
     * @return HtmlElement
     */
    public static function cardText(string $text = ''): HtmlElement
    {
        $p = new self('p', $text);
        $p->addCSSClass('card-text');
        return $p;
    }

    /**
     * Create a card title element
     *
     * @param string $text Title text
     * @param int $level Heading level (1-6)
     * @return HtmlElement
     */
    public static function cardTitle(string $text = '', int $level = 5): HtmlElement
    {
        $tag = 'h' . min(max($level, 1), 6);
        $title = new self($tag, $text);
        $title->addCSSClass('card-title');
        return $title;
    }

    /**
     * Create a card subtitle element
     *
     * @param string $text Subtitle text
     * @param int $level Heading level (1-6)
     * @return HtmlElement
     */
    public static function cardSubtitle(string $text = '', int $level = 6): HtmlElement
    {
        $tag = 'h' . min(max($level, 1), 6);
        $subtitle = new self($tag, $text);
        $subtitle->addCSSClass('card-subtitle');
        return $subtitle;
    }

    // ========================================================================
    // ALERT COMPONENTS
    // ========================================================================

    /**
     * Create a primary alert
     *
     * @param string $message Alert message text
     * @param bool $dismissible Whether alert is dismissible
     * @return HtmlElement
     */
    public static function alertPrimary(string $message = '', bool $dismissible = false): HtmlElement
    {
        $alert = new self('div', $message);
        $alert->setAttribute('role', 'alert');
        $alert->addCSSClass('alert');
        $alert->addCSSClass('alert-primary');
        if ($dismissible) {
            $alert->addCSSClass('alert-dismissible');
            $alert->addCSSClass('fade');
            $alert->addCSSClass('show');
        }
        return $alert;
    }

    /**
     * Create a success alert
     *
     * @param string $message Alert message text
     * @param bool $dismissible Whether alert is dismissible
     * @return HtmlElement
     */
    public static function alertSuccess(string $message = '', bool $dismissible = false): HtmlElement
    {
        $alert = new self('div', $message);
        $alert->setAttribute('role', 'alert');
        $alert->addCSSClass('alert');
        $alert->addCSSClass('alert-success');
        if ($dismissible) {
            $alert->addCSSClass('alert-dismissible');
            $alert->addCSSClass('fade');
            $alert->addCSSClass('show');
        }
        return $alert;
    }

    /**
     * Create a warning alert
     *
     * @param string $message Alert message text
     * @param bool $dismissible Whether alert is dismissible
     * @return HtmlElement
     */
    public static function alertWarning(string $message = '', bool $dismissible = false): HtmlElement
    {
        $alert = new self('div', $message);
        $alert->setAttribute('role', 'alert');
        $alert->addCSSClass('alert');
        $alert->addCSSClass('alert-warning');
        if ($dismissible) {
            $alert->addCSSClass('alert-dismissible');
            $alert->addCSSClass('fade');
            $alert->addCSSClass('show');
        }
        return $alert;
    }

    /**
     * Create a danger alert
     *
     * @param string $message Alert message text
     * @param bool $dismissible Whether alert is dismissible
     * @return HtmlElement
     */
    public static function alertDanger(string $message = '', bool $dismissible = false): HtmlElement
    {
        $alert = new self('div', $message);
        $alert->setAttribute('role', 'alert');
        $alert->addCSSClass('alert');
        $alert->addCSSClass('alert-danger');
        if ($dismissible) {
            $alert->addCSSClass('alert-dismissible');
            $alert->addCSSClass('fade');
            $alert->addCSSClass('show');
        }
        return $alert;
    }

    /**
     * Create an info alert
     *
     * @param string $message Alert message text
     * @param bool $dismissible Whether alert is dismissible
     * @return HtmlElement
     */
    public static function alertInfo(string $message = '', bool $dismissible = false): HtmlElement
    {
        $alert = new self('div', $message);
        $alert->setAttribute('role', 'alert');
        $alert->addCSSClass('alert');
        $alert->addCSSClass('alert-info');
        if ($dismissible) {
            $alert->addCSSClass('alert-dismissible');
            $alert->addCSSClass('fade');
            $alert->addCSSClass('show');
        }
        return $alert;
    }

    // ========================================================================
    // BADGE COMPONENTS
    // ========================================================================

    /**
     * Create a primary badge
     *
     * @param string $text Badge text
     * @param bool $pill Whether badge is pill-shaped
     * @return HtmlElement
     */
    public static function badgePrimary(string $text = '', bool $pill = false): HtmlElement
    {
        $badge = new self('span', $text);
        $badge->addCSSClass('badge');
        $badge->addCSSClass('badge-primary');
        if ($pill) {
            $badge->addCSSClass('badge-pill');
        }
        return $badge;
    }

    /**
     * Create a success badge
     *
     * @param string $text Badge text
     * @param bool $pill Whether badge is pill-shaped
     * @return HtmlElement
     */
    public static function badgeSuccess(string $text = '', bool $pill = false): HtmlElement
    {
        $badge = new self('span', $text);
        $badge->addCSSClass('badge');
        $badge->addCSSClass('badge-success');
        if ($pill) {
            $badge->addCSSClass('badge-pill');
        }
        return $badge;
    }

    /**
     * Create a danger badge
     *
     * @param string $text Badge text
     * @param bool $pill Whether badge is pill-shaped
     * @return HtmlElement
     */
    public static function badgeDanger(string $text = '', bool $pill = false): HtmlElement
    {
        $badge = new self('span', $text);
        $badge->addCSSClass('badge');
        $badge->addCSSClass('badge-danger');
        if ($pill) {
            $badge->addCSSClass('badge-pill');
        }
        return $badge;
    }

    /**
     * Create a warning badge
     *
     * @param string $text Badge text
     * @param bool $pill Whether badge is pill-shaped
     * @return HtmlElement
     */
    public static function badgeWarning(string $text = '', bool $pill = false): HtmlElement
    {
        $badge = new self('span', $text);
        $badge->addCSSClass('badge');
        $badge->addCSSClass('badge-warning');
        if ($pill) {
            $badge->addCSSClass('badge-pill');
        }
        return $badge;
    }

    /**
     * Create an info badge
     *
     * @param string $text Badge text
     * @param bool $pill Whether badge is pill-shaped
     * @return HtmlElement
     */
    public static function badgeInfo(string $text = '', bool $pill = false): HtmlElement
    {
        $badge = new self('span', $text);
        $badge->addCSSClass('badge');
        $badge->addCSSClass('badge-info');
        if ($pill) {
            $badge->addCSSClass('badge-pill');
        }
        return $badge;
    }

    /**
     * Create a secondary badge
     *
     * @param string $text Badge text
     * @param bool $pill Whether badge is pill-shaped
     * @return HtmlElement
     */
    public static function badgeSecondary(string $text = '', bool $pill = false): HtmlElement
    {
        $badge = new self('span', $text);
        $badge->addCSSClass('badge');
        $badge->addCSSClass('badge-secondary');
        if ($pill) {
            $badge->addCSSClass('badge-pill');
        }
        return $badge;
    }

    // ========================================================================
    // MODAL COMPONENTS
    // ========================================================================

    /**
     * Create a modal container
     *
     * @param string $id Modal ID
     * @return HtmlElement
     */
    public static function modal(string $id): HtmlElement
    {
        $modal = new self('div');
        $modal->setAttribute('id', $id);
        $modal->setAttribute('role', 'dialog');
        $modal->addCSSClass('modal');
        return $modal;
    }

    /**
     * Create a modal dialog wrapper
     *
     * @param string|null $size Modal size (sm, lg, xl)
     * @return HtmlElement
     */
    public static function modalDialog(?string $size = null): HtmlElement
    {
        $dialog = new self('div');
        $dialog->addCSSClass('modal-dialog');
        
        if ($size === 'sm') {
            $dialog->addCSSClass('modal-sm');
        } elseif ($size === 'lg') {
            $dialog->addCSSClass('modal-lg');
        } elseif ($size === 'xl') {
            $dialog->addCSSClass('modal-xl');
        }
        
        return $dialog;
    }

    /**
     * Create a modal content wrapper
     *
     * @return HtmlElement
     */
    public static function modalContent(): HtmlElement
    {
        $content = new self('div');
        $content->addCSSClass('modal-content');
        return $content;
    }

    /**
     * Create a modal header
     *
     * @param string $title Modal title text
     * @return HtmlElement
     */
    public static function modalHeader(string $title = ''): HtmlElement
    {
        $header = new self('div');
        $header->addCSSClass('modal-header');
        
        if ($title !== '') {
            $titleEl = new self('h5', $title);
            $titleEl->addCSSClass('modal-title');
            $header->addNested($titleEl);
        }
        
        return $header;
    }

    /**
     * Create a modal body
     *
     * @param string $text Body text (optional)
     * @return HtmlElement
     */
    public static function modalBody(string $text = ''): HtmlElement
    {
        $body = new self('div', $text);
        $body->addCSSClass('modal-body');
        return $body;
    }

    /**
     * Create a modal footer
     *
     * @return HtmlElement
     */
    public static function modalFooter(): HtmlElement
    {
        $footer = new self('div');
        $footer->addCSSClass('modal-footer');
        return $footer;
    }

    // ========================================================================
    // NAVBAR COMPONENTS
    // ========================================================================

    /**
     * Create a navbar container
     *
     * @param string|null $theme Navbar theme (light, dark)
     * @param string|null $background Background color (primary, success, etc.)
     * @return HtmlElement
     */
    public static function navbar(?string $theme = null, ?string $background = null): HtmlElement
    {
        $navbar = new self('nav');
        $navbar->addCSSClass('navbar');
        
        if ($theme === 'dark') {
            $navbar->addCSSClass('navbar-dark');
        } elseif ($theme === 'light') {
            $navbar->addCSSClass('navbar-light');
        }
        
        if ($background !== null) {
            $navbar->addCSSClass('bg-' . $background);
        }
        
        return $navbar;
    }

    /**
     * Create a navbar brand element
     *
     * @param string $text Brand text
     * @return HtmlElement
     */
    public static function navbarBrand(string $text = ''): HtmlElement
    {
        $brand = new self('span', $text);
        $brand->addCSSClass('navbar-brand');
        return $brand;
    }

    /**
     * Create a navbar navigation list
     *
     * @return HtmlElement
     */
    public static function navbarNav(): HtmlElement
    {
        $nav = new self('ul');
        $nav->addCSSClass('navbar-nav');
        return $nav;
    }

    /**
     * Create a navbar item
     *
     * @return HtmlElement
     */
    public static function navbarItem(): HtmlElement
    {
        $item = new self('li');
        $item->addCSSClass('nav-item');
        return $item;
    }

    /**
     * Create a navbar link
     *
     * @param string $text Link text
     * @param string $href Link URL
     * @param bool $active Whether link is active
     * @return HtmlElement
     */
    public static function navbarLink(string $text = '', string $href = '#', bool $active = false): HtmlElement
    {
        $link = new self('a', $text);
        $link->setAttribute('href', $href);
        $link->addCSSClass('nav-link');
        
        if ($active) {
            $link->addCSSClass('active');
        }
        
        return $link;
    }

    /**
     * Create a navbar toggler button
     *
     * @return HtmlElement
     */
    public static function navbarToggler(): HtmlElement
    {
        $toggler = new self('button');
        $toggler->setAttribute('type', 'button');
        $toggler->addCSSClass('navbar-toggler');
        return $toggler;
    }

    // ========================================================================
    // PAGINATION COMPONENTS
    // ========================================================================

    /**
     * Create a pagination navigation wrapper
     *
     * @return HtmlElement
     */
    public static function pagination(): HtmlElement
    {
        $nav = new self('nav');
        return $nav;
    }

    /**
     * Create a pagination list
     *
     * @param string|null $size Pagination size (sm, lg)
     * @return HtmlElement
     */
    public static function paginationList(?string $size = null): HtmlElement
    {
        $list = new self('ul');
        $list->addCSSClass('pagination');
        
        if ($size === 'sm') {
            $list->addCSSClass('pagination-sm');
        } elseif ($size === 'lg') {
            $list->addCSSClass('pagination-lg');
        }
        
        return $list;
    }

    /**
     * Create a pagination item
     *
     * @param bool $active Whether item is active
     * @param bool $disabled Whether item is disabled
     * @return HtmlElement
     */
    public static function paginationItem(bool $active = false, bool $disabled = false): HtmlElement
    {
        $item = new self('li');
        $item->addCSSClass('page-item');
        
        if ($active) {
            $item->addCSSClass('active');
        }
        
        if ($disabled) {
            $item->addCSSClass('disabled');
        }
        
        return $item;
    }

    /**
     * Create a pagination link
     *
     * @param string $text Link text
     * @param string $href Link URL
     * @return HtmlElement
     */
    public static function paginationLink(string $text = '', string $href = '#'): HtmlElement
    {
        $link = new self('a', $text);
        $link->setAttribute('href', $href);
        $link->addCSSClass('page-link');
        return $link;
    }

    /**
     * Create a pagination previous link
     *
     * @param string $href Link URL
     * @return HtmlElement
     */
    public static function paginationPrevious(string $href = '#'): HtmlElement
    {
        $item = new self('li');
        $item->addCSSClass('page-item');
        
        $link = new self('a', 'Previous');
        $link->setAttribute('href', $href);
        $link->addCSSClass('page-link');
        
        $item->addNested($link);
        return $item;
    }

    /**
     * Create a pagination next link
     *
     * @param string $href Link URL
     * @return HtmlElement
     */
    public static function paginationNext(string $href = '#'): HtmlElement
    {
        $item = new self('li');
        $item->addCSSClass('page-item');
        
        $link = new self('a', 'Next');
        $link->setAttribute('href', $href);
        $link->addCSSClass('page-link');
        
        $item->addNested($link);
        return $item;
    }
}
