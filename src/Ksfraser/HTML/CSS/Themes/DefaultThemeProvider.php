<?php

namespace Ksfraser\HTML\CSS\Themes;

use Ksfraser\HTML\CSS\CSSProviderInterface;

/**

 * DefaultThemeProvider - Default application theme CSS provider

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

 * Provides the standard look and feel for the application

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
/**
 * DefaultThemeProvider
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class DefaultThemeProvider implements CSSProviderInterface {
    
/**
    
 * getName
    
 *
    
 * @since v1.0.0 2026-04-13
    
 * @return void
    
 */
    public /**
 * getName
 *
 * @return void
 */
/**
 * getName
 *
 * @return void
 */
/**
 * getName
 *
 * @return void
 */
/**
 * getName
 *
 * @return void
 */
/**
 * getName
 *
 * @return void
 */
/**
 * getName
 *
 * @return void
 */
/**
 * getName
 *
 * @return void
 */
/**
 * getName
 *
 * @return void
 */
/**
 * getName
 *
 * @return void
 */
/**
 * getName
 *
 * @return void
 */
/**
 * getName
 *
 * @return void
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function getName() {
        return 'default';
    }
    
/**
    
 * supportsTheme
    
 *
    
 * @since v1.0.0 2025-09-08
    
 * @param mixed $theme
    
 * @return void
    
 */
    public /**
 * supportsTheme
 *
 * @param mixed $theme
 * @return void
 */
/**
 * supportsTheme
 *
 * @param mixed $theme
 * @return void
 */
/**
 * supportsTheme
 *
 * @param mixed $theme
 * @return void
 */
/**
 * supportsTheme
 *
 * @param mixed $theme
 * @return void
 */
/**
 * supportsTheme
 *
 * @param mixed $theme
 * @return void
 */
/**
 * supportsTheme
 *
 * @param mixed $theme
 * @return void
 */
/**
 * supportsTheme
 *
 * @param mixed $theme
 * @return void
 */
/**
 * supportsTheme
 *
 * @param mixed $theme
 * @return void
 */
/**
 * supportsTheme
 *
 * @param mixed $theme
 * @return void
 */
/**
 * supportsTheme
 *
 * @param mixed $theme
 * @return void
 */
/**
 * supportsTheme
 *
 * @param mixed $theme
 * @return void
 */
/**
 * supportsTheme
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $theme
 * @return void
 */
function supportsTheme($theme) {
        return $theme === 'default' || $theme === 'light';
    }
    
/**
    
 * getCSS
    
 *
    
 * @since v1.0.0 2025-09-08
    
 * @return void
    
 */
    public /**
 * getCSS
 *
 * @return void
 */
/**
 * getCSS
 *
 * @return void
 */
/**
 * getCSS
 *
 * @return void
 */
/**
 * getCSS
 *
 * @return void
 */
/**
 * getCSS
 *
 * @return void
 */
/**
 * getCSS
 *
 * @return void
 */
/**
 * getCSS
 *
 * @return void
 */
/**
 * getCSS
 *
 * @return void
 */
/**
 * getCSS
 *
 * @return void
 */
/**
 * getCSS
 *
 * @return void
 */
/**
 * getCSS
 *
 * @return void
 */
/**
 * getCSS
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function getCSS() {
        return '
        /* Default Theme Enhancements */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Enhanced card styling */
        .management-section {
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: box-shadow 0.3s ease;
        }
        
        .management-section:hover {
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }
        
        /* Enhanced button interactions */
        .btn {
            transition: all 0.2s ease;
        }
        
        .btn:hover {
            transform: translateY(-1px);
        }
        ';
    }
}
