<?php

namespace Ksfraser\HTML\CSS;

/**

 * CSSProviderInterface - Interface for injectable CSS providers

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

 * Allows dependency injection of different CSS styling approaches

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

 * @since v1.0.0 2025-09-08

 * @return void

 */
interface CSSProviderInterface {
    /**
     * Get CSS string for this provider
     *
     * @since v1.0.0 2025-09-08
     * @return void
     */
    public function getCSS();
    
    /**
    
     * Get provider name/identifier
    
     *
    
     * @since v1.0.0 2025-09-08
    
     * @return void
    
     */
    public function getName();
    
    /**
    
     * Check if provider supports current theme
    
     *
    
     * @since v1.0.0 2025-09-08
    
     * @param mixed $theme
    
     * @return void
    
     */
public function supportsTheme($theme);
}

