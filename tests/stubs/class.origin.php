<?php

// Test stub for legacy includes.
// Some legacy VIEW_* classes do require_once('class.origin.php') from include_path.

if (!class_exists('Ksfraser\\Origin\\origin')) {
    $autoload = __DIR__ . '/../../vendor/autoload.php';
    if (file_exists($autoload)) {
        require_once $autoload;
    }
}

if (!class_exists('Ksfraser\\Origin\\origin')) {
    // Provide a minimal namespaced implementation so code that `use`s
    // Ksfraser\Origin\origin can operate in test environments.
    eval(<<<'PHP'
namespace Ksfraser\Origin;
class origin {
    protected $container_arr = [];

    public function __construct() {
        // Base constructor for stub
    }

    /**
     * set
     *
     * @since v1.0.5 2026-04-14
     * @param mixed $field
     * @param mixed $value
     * @return bool
     */
    public function set($field, $value) {
        $this->container_arr[$field] = $value;
        return true;
    }

    /**
     * get
     *
     * @since v1.0.5 2026-04-14
     * @param mixed $field
     * @return mixed|null
     */
    public function get($field) {
        return array_key_exists($field, $this->container_arr) ? $this->container_arr[$field] : null;
    }

    /**
     * set_var
     *
     * @since v1.0.5 2026-04-14
     * @param mixed $var
     * @param mixed $value
     * @return bool
     */
    public function set_var($var, $value) {
        return $this->set($var, $value);
    }
}
PHP
    );
}
// Provide a global alias `origin` for legacy code that expects a non-namespaced class.
if (!class_exists('origin') && class_exists('Ksfraser\\Origin\\origin')) {
    class origin extends \Ksfraser\Origin\origin {}
}

