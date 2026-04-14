<?php

// Test stub for legacy includes.
// Some legacy VIEW_* classes do require_once('class.origin.php') from include_path.

if (!class_exists('Ksfraser\\Origin\\origin')) {
    $autoload = __DIR__ . '/../../vendor/autoload.php';
    if (file_exists($autoload)) {
        require_once $autoload;
    }
}

// If the namespaced origin class is not present, provide a minimal namespaced
// implementation so src files that `use Ksfraser\\Origin\\origin` can compile
if (!class_exists('Ksfraser\\Origin\\origin')) {
    eval('namespace Ksfraser\\Origin; class origin {
        protected $container_arr = array();
/**
 * set
 *
 * @since v1.0.5 2026-04-14
 * @param mixed $field
 * @param mixed $value
 * @return void
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
 * @return void
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
 * @return void
 */
        public function set_var($var, $value) {
            return $this->set($var, $value);
        }
    }');
}

if (!class_exists('origin', false)) {
    if (class_exists('Ksfraser\\Origin\\origin')) {
/**
 * class origin
 *
 * @since 1.0.1 2026-02-16
 */
        class origin extends \Ksfraser\Origin\origin
        {
        }
    } else {
        // Fallback minimal origin for tests when the namespaced origin class is not available
/**
 * class origin
 *
 * @since 1.0.1 2026-02-16
 */
        class origin
        {
            protected $container_arr = array();
/**
 * set
 *
 * @since v1.0.5 2026-04-14
 * @param mixed $field
 * @param mixed $value
 * @return void
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
 * @return void
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
 * @return void
 */
            public function set_var($var, $value) {
                return $this->set($var, $value);
            }
        }
    }
}
