<?php

namespace Ksfraser\HTML\CSS;

/**
 * CSSProviderInterface - Interface for injectable CSS providers
 * Allows dependency injection of different CSS styling approaches
 *
 * @since v1.0.0 2025-09-08
 */
interface CSSProviderInterface {
    /**
     * Get CSS string for this provider
 * @return void
 * @since v1.0.0 2025-09-08
     */
    public function getCSS();
    
    /**
     * Get provider name/identifier
 * @return void
 * @since v1.0.0 2025-09-08
     */
    public function getName();
    
    /**
     * Check if provider supports current theme
 * @return void
 * @param mixed $theme
 * @since v1.0.0 2025-09-08
 */
public function supportsTheme($theme);
}

