<?php
/*
 * Copyright (c) 2025 Kevin Fraser
 *
 * See the file LICENSE.txt for copying permission.
 */

namespace Ksfraser\HTML;

/**
 * Interface for HTML elements
 * Provides methods for both direct output and string return of HTML
 *
 * @since 1.0.1 2026-02-16
 */
interface HtmlElementInterface {
    /**
     * Returns HTML string representation
 * @return string
 * @since 1.0.1 2026-02-16
     */
    public function getHtml(): string;

    /**
     * Outputs HTML directly
     */
    /**
     * Render the element as HTML.
     *
     * Outputs the HTML representation of this element.
     * Implementations should emit the markup (for example using echo or print)
     * rather than returning it.
     *
     * @return void
 * @since 1.0.1 2026-02-16
     */
    public function toHtml(): void;
}
?>
