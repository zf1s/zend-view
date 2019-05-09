<?php
/*
 * Set error reporting to the level to which Zend Framework code must comply.
 */
error_reporting(E_ALL | E_STRICT);

$rootDir = dirname(dirname(__FILE__));

/**
 * Setup autoloading
 */
require $rootDir . '/vendor/autoload.php';

$zfTests = $rootDir . '/tests';

/*
 * Load the user-defined test configuration file, if it exists; otherwise, load
 * the default configuration.
 */
if (is_readable($zfTests . '/_config/TestConfiguration.php')) {
    require_once $zfTests . '/_config/TestConfiguration.php';
} else {
    require_once $zfTests . '/_config/TestConfiguration.php.dist';
}

/**
 * Start output buffering, if enabled
 */
if (defined('TESTS_ZEND_OB_ENABLED') && constant('TESTS_ZEND_OB_ENABLED')) {
    ob_start();
}

/*
 * Unset global variables that are no longer needed.
 */
unset($zfTests, $path);
