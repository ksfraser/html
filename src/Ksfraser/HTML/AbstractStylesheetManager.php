<?php
namespace Ksfraser\HTML;

use Ksfraser\HTML\Elements\Stylesheet;

/**

 * AbstractStylesheetManager - Generic stylesheet loading with caching and security

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

 * Provides reusable functionality for managing CSS asset loading across any module.

 * 

 * 

 * 

 * Handles stylesheet element rendering, caching for performance, and security.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Uses the Stylesheet element (extends HtmlElement) to generate properly formatted

 * 

 * 

 * 

 * <link rel="stylesheet"> tags via the HTML builder pattern.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Subclasses implement the specific stylesheet configuration via:

 * 

 * 

 * 

 * - $commonSheets: Array of common stylesheet names (cached, shared across views)

 * 

 * 

 * 

 * - $viewSheets: Associative array mapping view names to their specific stylesheets

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Compatible with platform-specific asset resolution via asset_url() function:

 * 

 * 

 * 

 * - FrontAccounting: Searches user skin → module → default paths

 * 

 * 

 * 

 * - WordPress: Uses theme/plugin asset paths

 * 

 * 

 * 

 * - SuiteCRM: Uses theme structure

 * 

 * 

 * 

 * - Standalone: Simple path-based resolution

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

 * @package Ksfraser\HTML

 * @return void

 */
abstract /**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * AbstractStylesheetManager
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class AbstractStylesheetManager {
    /**
     * Cache for common stylesheets (loaded once per request)
     *
     * @var string|null
     * @return void
     */
    private static ?string $commonStylesheetsCache = null;
    
    /**
    
     * Common stylesheet names (shared across all views)
    
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
    
     * Subclasses override this with their specific sheets
    
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
    
     * @var array<string>
    
     * @return void
    
     */
    protected static array $commonSheets = [];
    
    /**
    
     * View-specific stylesheet names (unique per view)
    
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
    
     * Subclasses override this with their view mappings
    
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
    
     * @var array<string, array<string>>
    
     * @return void
    
     */
    protected static array $viewSheets = [];
    
    /**
    
     * Get all common stylesheets
    
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
    
     * Common stylesheets are cached to prevent duplicate loading across multiple views.
    
     *     
    
     *     
    
     *     
    
     * This is efficient for pages with multiple components of the same module.
    
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
    
     * @return string HTML rendering of common stylesheet link elements
    
     */
    final public static /**
 * getCommonStylesheets
 *
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getCommonStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getCommonStylesheets(): string {
        // Return cached result on subsequent calls
        if (self::$commonStylesheetsCache !== null) {
            return self::$commonStylesheetsCache;
        }
        
        if (!function_exists('asset_url')) {
            self::$commonStylesheetsCache = '';
            return '';
        }
        
        $links = '';
        foreach (static::$commonSheets as $sheet) {
            $links .= self::buildStylesheetLink($sheet);
        }
        
        self::$commonStylesheetsCache = $links;
        return $links;
    }
    
    /**
    
     * Get view-specific stylesheets
    
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
    
     * View-specific stylesheets are loaded separately to allow:
    
     *     
    
     *     
    
     *     
    
     * 1. Selective override per view in skins
    
     *     
    
     *     
    
     *     
    
     * 2. Loading only needed styles for specific views
    
     *     
    
     *     
    
     *     
    
     * 3. Clear separation of concerns (common vs unique styling)
    
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
    
     * @since v1.0.0 2026-04-13
    
     * @param string $viewName View identifier (e.g., 'loan-types', 'reporting')
    
     * @return string HTML rendering of view-specific stylesheet link elements
    
     */
    final public static /**
 * getViewStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getViewStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
function getViewStylesheets(string $viewName): string {
        if (!function_exists('asset_url')) {
            return '';
        }
        
        $viewName = strtolower(trim($viewName));
        $sheets = static::$viewSheets[$viewName] ?? [];
        
        $links = '';
        foreach ($sheets as $sheet) {
            $links .= self::buildStylesheetLink($sheet);
        }
        
        return $links;
    }
    
    /**
    
     * Get all stylesheets for a view (common + view-specific)
    
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
    
     * Convenience method for views that want one call to get everything.
    
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
    
     * @since v1.0.0 2026-04-13
    
     * @param string $viewName View identifier
    
     * @return string HTML rendering of all stylesheet link elements
    
     */
    final public static /**
 * getStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @param string $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
/**
 * getStylesheets
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $viewName
 * @return string
 */
function getStylesheets(string $viewName): string {
        return self::getCommonStylesheets() . self::getViewStylesheets($viewName);
    }
    
    /**
    
     * Build a single stylesheet link element using Stylesheet class
    
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
    
     * Creates a Stylesheet element, configures it, and calls render() to generate HTML.
    
     *     
    
     *     
    
     *     
    
     * This maintains consistency with the HTML builder pattern used throughout codebase.
    
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
    
     * @since v1.0.0 2026-04-13
    
     * @param string $sheetName Stylesheet name (without .css extension)
    
     * @return string HTML rendering of <link rel="stylesheet"> element
    
     */
    final protected static /**
 * buildStylesheetLink
 *
 * @param string $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @param string $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @param string $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @param string $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @param string $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @param string $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @param string $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @param string $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @param string $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @param string $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @param string $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
/**
 * buildStylesheetLink
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sheetName
 * @return string
 */
function buildStylesheetLink(string $sheetName): string
    {
        $url = asset_url('css/' . $sheetName . '.css');
        
        // Create and configure Stylesheet element
        $stylesheet = (new Stylesheet())
            ->setRel('stylesheet')
            ->setHref($url);
        
        // Render element to HTML string with newline
        return $stylesheet->render() . PHP_EOL;
    }
    
    /**
    
     * Clear common stylesheet cache
    
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
    
     * Useful for testing or if stylesheets change during execution.
    
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
    
     * @since v1.0.0 2026-04-13
    
     * @return void
    
     */
    final public static /**
 * clearCache
 *
 * @return void
 */
/**
 * clearCache
 *
 * @return void
 */
/**
 * clearCache
 *
 * @return void
 */
/**
 * clearCache
 *
 * @return void
 */
/**
 * clearCache
 *
 * @return void
 */
/**
 * clearCache
 *
 * @return void
 */
/**
 * clearCache
 *
 * @return void
 */
/**
 * clearCache
 *
 * @return void
 */
/**
 * clearCache
 *
 * @return void
 */
/**
 * clearCache
 *
 * @return void
 */
/**
 * clearCache
 *
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * clearCache
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function clearCache(): void {
        self::$commonStylesheetsCache = null;
    }
    
    /**
    
     * Get stylesheet loading info (for debugging/documentation)
    
     *
    
     * @since v1.0.5 2026-04-14
    
     * @return array
    
     */
    final public static /**
 * getInfo
 *
 * @return array
 */
/**
 * getInfo
 *
 * @return array
 */
/**
 * getInfo
 *
 * @return array
 */
/**
 * getInfo
 *
 * @return array
 */
/**
 * getInfo
 *
 * @return array
 */
/**
 * getInfo
 *
 * @return array
 */
/**
 * getInfo
 *
 * @return array
 */
/**
 * getInfo
 *
 * @return array
 */
/**
 * getInfo
 *
 * @return array
 */
/**
 * getInfo
 *
 * @return array
 */
/**
 * getInfo
 *
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getInfo
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
function getInfo(): array {
        return [
            'common_sheets' => static::$commonSheets,
            'view_sheets' => static::$viewSheets,
            'common_cached' => self::$commonStylesheetsCache !== null,
        ];
    }
}
