/**
 * BaseHandler - Abstract base class for all domain handlers
 * 
 * SRP: Provides common handler functionality: error handling, success callbacks,
 * and AJAX request management for all domain-specific handlers.
 * 
 * @package Ksfraser\HTML\Handlers
 */
class BaseHandler {
    /**
     * Constructor
     * @param {string} baseUrl - Base URL for API calls
     */
    constructor(baseUrl = '/api') {
        this.baseUrl = baseUrl;
        this.isLoading = false;
        this.lastError = null;
    }

    /**
     * Handle API error response
     * @param {Error|string} error - Error object or message
     * @private
     */
    _handleError(error) {
        this.lastError = error instanceof Error ? error.message : error;
        console.error(`[${this.constructor.name}] Error:`, this.lastError);
        
        // Show user-friendly error
        if (typeof alert !== 'undefined') {
            alert('An error occurred. Please try again.');
        }
    }

    /**
     * Show success message
     * @param {string} message - Success message to display
     * @protected
     */
    _showSuccess(message) {
        console.log(`[${this.constructor.name}] Success:`, message);
        if (typeof alert !== 'undefined') {
            alert(message);
        }
    }

    /**
     * Make AJAX request
     * @param {string} method - HTTP method (GET, POST, PUT, DELETE)
     * @param {string} endpoint - API endpoint
     * @param {object} data - Request payload
     * @return {Promise} Response promise
     * @protected
     */
    async _request(method, endpoint, data = null) {
        this.isLoading = true;
        
        try {
            const options = {
                method: method,
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            };

            if (data && (method === 'POST' || method === 'PUT')) {
                options.body = JSON.stringify(data);
            }

            const url = `${this.baseUrl}${endpoint}`;
            const response = await fetch(url, options);

            if (!response.ok) {
                throw new Error(`HTTP ${response.status}: ${response.statusText}`);
            }

            return await response.json();
        } catch (error) {
            this._handleError(error);
            throw error;
        } finally {
            this.isLoading = false;
        }
    }

    /**
     * Check if currently loading
     * @return {boolean}
     */
    isProcessing() {
        return this.isLoading;
    }

    /**
     * Get last error message
     * @return {string|null}
     */
    getLastError() {
        return this.lastError;
    }
}
