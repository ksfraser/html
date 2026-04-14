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
 *
 * @package Ksfraser\HTML\Traits
 * @since 1.0.5 2026-03-30
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
 * @since 1.0.5 2026-03-30
     */
    public static function buttonPrimary(string $text = '', string $type = 'button'): HtmlElement
    {
        if ($type === 'submit') {
            $button = new \Ksfraser\HTML\Button\SubmitButton($text);
        } else {
            $button = new \Ksfraser\HTML\Button\Button($text);
            $button->setType($type);
            $button->addClass('btn btn-primary');
        }
        return $button;
    }

    /**
     * Create a success button
     *
     * @param string $text Button text/label
     * @param string $type Button type
     * @return HtmlElement
 * @since v1.0.0 2026-04-13
     */
    public static function buttonSuccess(string $text = '', string $type = 'button'): HtmlElement
    {
        if ($type === 'submit') {
            $button = new \Ksfraser\HTML\Button\SubmitButton($text);
        } else {
            $button = new \Ksfraser\HTML\Button\Button($text);
            $button->setType($type);
            $button->addClass('btn btn-success');
        }
        return $button;
    }

    /**
     * Create a danger button
     *
     * @param string $text Button text/label
     * @param string $type Button type
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function buttonDanger(string $text = '', string $type = 'button'): HtmlElement
    {
        if ($type === 'submit') {
            $button = new \Ksfraser\HTML\Button\SubmitButton($text);
        } else {
            $button = new \Ksfraser\HTML\Button\Button($text);
            $button->setType($type);
            $button->addClass('btn btn-danger');
        }
        return $button;
    }

    /**
     * Create a warning button
     *
     * @param string $text Button text/label
     * @param string $type Button type
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function buttonWarning(string $text = '', string $type = 'button'): HtmlElement
    {
        if ($type === 'submit') {
            $button = new \Ksfraser\HTML\Button\SubmitButton($text);
        } else {
            $button = new \Ksfraser\HTML\Button\Button($text);
            $button->setType($type);
            $button->addClass('btn btn-warning');
        }
        return $button;
    }

    /**
     * Create an info button
     *
     * @param string $text Button text/label
     * @param string $type Button type
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function buttonInfo(string $text = '', string $type = 'button'): HtmlElement
    {
        if ($type === 'submit') {
            $button = new \Ksfraser\HTML\Button\SubmitButton($text);
        } else {
            $button = new \Ksfraser\HTML\Button\Button($text);
            $button->setType($type);
            $button->addClass('btn btn-info');
        }
        return $button;
    }

    /**
     * Create a secondary button
     *
     * @param string $text Button text/label
     * @param string $type Button type
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function buttonSecondary(string $text = '', string $type = 'button'): HtmlElement
    {
        if ($type === 'submit') {
            $button = new \Ksfraser\HTML\Button\SubmitButton($text);
        } else {
            $button = new \Ksfraser\HTML\Button\Button($text);
            $button->setType($type);
            $button->addClass('btn btn-secondary');
        }
        return $button;
    }

    /**
     * Create a CloseButton instance
     *
     * @return HtmlElement
 * @param ?string $text
 * @since v1.0.5 2026-04-14
 */
public static function buttonClose(?string $text = null): HtmlElement
    {
        return new \Ksfraser\HTML\Button\CloseButton($text);
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
 * @since v1.0.5 2026-04-14
     */
    public static function card(): HtmlElement
    {
        $card = self::element('div');
        $card->addCSSClass('card');
        return $card;
    }

    /**
     * Create a card header
     *
     * @param string $text Header text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function cardHeader(string $text = ''): HtmlElement
    {
        $header = self::element('div', $text);
        $header->addCSSClass('card-header');
        return $header;
    }

    /**
     * Create a card body
     *
     * @param string $text Body text (optional)
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function cardBody(string $text = ''): HtmlElement
    {
        $body = self::element('div', $text);
        $body->addCSSClass('card-body');
        return $body;
    }

    /**
     * Create a card footer
     *
     * @param string $text Footer text (optional)
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function cardFooter(string $text = ''): HtmlElement
    {
        $footer = self::element('div', $text);
        $footer->addCSSClass('card-footer');
        return $footer;
    }

    /**
     * Create a card image
     *
     * @param string $src Image source
     * @param string $alt Alternative text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function cardImage(string $src, string $alt = ''): HtmlElement
    {
        $image = self::element('img');
        if (method_exists($image, 'setSrc')) {
            $image->setSrc($src);
        } else {
            $image->setAttribute('src', $src);
        }
        if ($alt !== '') {
            if (method_exists($image, 'setAlt')) {
                $image->setAlt($alt);
            } else {
                $image->setAttribute('alt', $alt);
            }
        }
        $image->addCSSClass('card-img-top');
        return $image;
    }

    /**
     * Create a card text element
     *
     * @param string $text Text content
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function cardText(string $text = ''): HtmlElement
    {
        $p = self::element('p', $text);
        $p->addCSSClass('card-text');
        return $p;
    }

    /**
     * Create a card title element
     *
     * @param string $text Title text
     * @param int $level Heading level (1-6)
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function cardTitle(string $text = '', int $level = 5): HtmlElement
    {
        $tag = 'h' . min(max($level, 1), 6);
        $title = self::element($tag, $text);
        $title->addCSSClass('card-title');
        return $title;
    }

    /**
     * Create a card subtitle element
     *
     * @param string $text Subtitle text
     * @param int $level Heading level (1-6)
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function cardSubtitle(string $text = '', int $level = 6): HtmlElement
    {
        $tag = 'h' . min(max($level, 1), 6);
        $subtitle = self::element($tag, $text);
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
 * @since v1.0.5 2026-04-14
     */
    public static function alertPrimary(string $message = '', bool $dismissible = false): HtmlElement
    {
        $alert = self::element('div', $message);
        if (method_exists($alert, 'setRole')) {
            $alert->setRole('alert');
        } else {
            $alert->setAttribute('role', 'alert');
        }
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
 * @since v1.0.5 2026-04-14
     */
    public static function alertSuccess(string $message = '', bool $dismissible = false): HtmlElement
    {
        $alert = self::element('div', $message);
        if (method_exists($alert, 'setRole')) {
            $alert->setRole('alert');
        } else {
            $alert->setAttribute('role', 'alert');
        }
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
 * @since v1.0.5 2026-04-14
     */
    public static function alertWarning(string $message = '', bool $dismissible = false): HtmlElement
    {
        $alert = self::element('div', $message);
        if (method_exists($alert, 'setRole')) {
            $alert->setRole('alert');
        } else {
            $alert->setAttribute('role', 'alert');
        }
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
 * @since v1.0.5 2026-04-14
     */
    public static function alertDanger(string $message = '', bool $dismissible = false): HtmlElement
    {
        $alert = self::element('div', $message);
        if (method_exists($alert, 'setRole')) {
            $alert->setRole('alert');
        } else {
            $alert->setAttribute('role', 'alert');
        }
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
 * @since v1.0.5 2026-04-14
     */
    public static function alertInfo(string $message = '', bool $dismissible = false): HtmlElement
    {
        $alert = self::element('div', $message);
        if (method_exists($alert, 'setRole')) {
            $alert->setRole('alert');
        } else {
            $alert->setAttribute('role', 'alert');
        }
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
 * @since v1.0.5 2026-04-14
     */
    public static function badgePrimary(string $text = '', bool $pill = false): HtmlElement
    {
        $badge = self::element('badge', $text);
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
 * @since v1.0.5 2026-04-14
     */
    public static function badgeSuccess(string $text = '', bool $pill = false): HtmlElement
    {
        $badge = self::element('badge', $text);
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
 * @since v1.0.5 2026-04-14
     */
    public static function badgeDanger(string $text = '', bool $pill = false): HtmlElement
    {
        $badge = self::element('badge', $text);
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
 * @since v1.0.5 2026-04-14
     */
    public static function badgeWarning(string $text = '', bool $pill = false): HtmlElement
    {
        $badge = self::element('badge', $text);
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
 * @since v1.0.5 2026-04-14
     */
    public static function badgeInfo(string $text = '', bool $pill = false): HtmlElement
    {
        $badge = self::element('badge', $text);
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
 * @since v1.0.5 2026-04-14
     */
    public static function badgeSecondary(string $text = '', bool $pill = false): HtmlElement
    {
        $badge = self::element('badge', $text);
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
 * @since v1.0.5 2026-04-14
     */
    public static function modal(string $id): HtmlElement
    {
        $modal = self::element('div');
        if (method_exists($modal, 'setId')) {
            $modal->setId($id);
        } else {
            $modal->setAttribute('id', $id);
        }

        if (method_exists($modal, 'setRole')) {
            $modal->setRole('dialog');
        } else {
            $modal->setAttribute('role', 'dialog');
        }
        $modal->addCSSClass('modal');
        return $modal;
    }

    /**
     * Create a modal dialog wrapper
     *
     * @return HtmlElement
 * @param ?string $size
 * @since v2.0.1 2026-04-14
     */
    public static function modalDialog(?string $size = null): HtmlElement
    {
        $dialog = self::element('div');
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
 * @since v1.0.5 2026-04-14
     */
    public static function modalContent(): HtmlElement
    {
        $content = self::element('div');
        $content->addCSSClass('modal-content');
        return $content;
    }

    /**
     * Create a modal header
     *
     * @param string $title Modal title text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function modalHeader(string $title = ''): HtmlElement
    {
        $header = self::element('div');
        $header->addCSSClass('modal-header');
        
        if ($title !== '') {
            $titleEl = self::element('h5', $title);
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
 * @since v1.0.5 2026-04-14
     */
    public static function modalBody(string $text = ''): HtmlElement
    {
        $body = self::element('div', $text);
        $body->addCSSClass('modal-body');
        return $body;
    }

    /**
     * Create a modal footer
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function modalFooter(): HtmlElement
    {
        $footer = self::element('div');
        $footer->addCSSClass('modal-footer');
        return $footer;
    }

    // ========================================================================
    // NAVBAR COMPONENTS
    // ========================================================================

    /**
     * Create a navbar container
     *
     * @return HtmlElement
 * @param ?string $theme
 * @param ?string $background
 * @since v2.0.1 2026-04-14
     */
    public static function navbar(?string $theme = null, ?string $background = null): HtmlElement
    {
        $navbar = self::element('nav');
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
 * @since v1.0.5 2026-04-14
     */
    public static function navbarBrand(string $text = ''): HtmlElement
    {
        $brand = self::element('span', $text);
        $brand->addCSSClass('navbar-brand');
        return $brand;
    }

    /**
     * Create a navbar navigation list
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function navbarNav(): HtmlElement
    {
        $nav = self::element('ul');
        $nav->addCSSClass('navbar-nav');
        return $nav;
    }

    /**
     * Create a navbar item
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function navbarItem(): HtmlElement
    {
        $item = self::element('li');
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
 * @since v1.0.5 2026-04-14
     */
    public static function navbarLink(string $text = '', string $href = '#', bool $active = false): HtmlElement
    {
        $link = self::element('a', $text);
        if (method_exists($link, 'setHref')) {
            $link->setHref($href);
        } else {
            $link->setAttribute('href', $href);
        }
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
 * @since v1.0.5 2026-04-14
     */
    public static function navbarToggler(): HtmlElement
    {
        $toggler = self::element('button');
        if (method_exists($toggler, 'setType')) {
            $toggler->setType('button');
        } else {
            $toggler->setAttribute('type', 'button');
        }
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
 * @since v1.0.5 2026-04-14
     */
    public static function pagination(): HtmlElement
    {
        $nav = self::element('nav');
        return $nav;
    }

    /**
     * Create a pagination list
     *
     * @return HtmlElement
 * @param ?string $size
 * @since v2.0.1 2026-04-14
     */
    public static function paginationList(?string $size = null): HtmlElement
    {
        $list = self::element('ul');
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
 * @since v1.0.5 2026-04-14
     */
    public static function paginationItem(bool $active = false, bool $disabled = false): HtmlElement
    {
        $item = self::element('li');
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
 * @since v1.0.5 2026-04-14
     */
    public static function paginationLink(string $text = '', string $href = '#'): HtmlElement
    {
        $link = self::element('a', $text);
        if (method_exists($link, 'setHref')) {
            $link->setHref($href);
        } else {
            $link->setAttribute('href', $href);
        }
        $link->addCSSClass('page-link');
        return $link;
    }

    /**
     * Create a pagination previous link
     *
     * @param string $href Link URL
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function paginationPrevious(string $href = '#'): HtmlElement
    {
        $item = self::element('li');
        $item->addCSSClass('page-item');
        
        $link = self::element('a', 'Previous');
        if (method_exists($link, 'setHref')) {
            $link->setHref($href);
        } else {
            $link->setAttribute('href', $href);
        }
        $link->addCSSClass('page-link');
        
        $item->addNested($link);
        return $item;
    }

    /**
     * Create a pagination next link
     *
     * @param string $href Link URL
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function paginationNext(string $href = '#'): HtmlElement
    {
        $item = self::element('li');
        $item->addCSSClass('page-item');
        
        $link = self::element('a', 'Next');
        $link->setAttribute('href', $href);
        $link->addCSSClass('page-link');
        
        $item->addNested($link);
        return $item;
    }
}

