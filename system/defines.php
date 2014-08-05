<?php

// Some standard defines
define('GRAV', true);
define('GRAV_VERSION', '0.8.0');
define('DS', '/');

// Directories and Paths
if (!defined('ROOT_DIR')) {
    define('ROOT_DIR', getcwd() .'/');
}
define('USER_PATH', 'user/');
define('USER_DIR', ROOT_DIR . USER_PATH);
define('SYSTEM_DIR', ROOT_DIR .'system/');
define('CACHE_DIR', ROOT_DIR .'cache/');
define('IMAGES_DIR', ROOT_DIR . 'images/');
define('LOG_DIR', ROOT_DIR .'logs/');
define('VENDOR_DIR', ROOT_DIR .'vendor/');
define('LIB_DIR', SYSTEM_DIR .'src/');
define('ACCOUNTS_DIR', USER_DIR .'accounts/');
define('DATA_DIR', USER_DIR .'data/');
define('PAGES_DIR', USER_DIR .'pages/');
define('BLOCKS_DIR', USER_DIR .'blocks/');

define('PLUGINS_DIR', USER_DIR .'plugins/');
define('THEMES_DIR', USER_DIR .'themes/');

// Some extensions
define('CONTENT_EXT', '.md');
define('TEMPLATE_EXT', '.html.twig');
define('TWIG_EXT', '.twig');
define('PLUGIN_EXT', '.php');
define('YAML_EXT', '.yaml');

// Content types
define('RAW_CONTENT', 1);
define('TWIG_CONTENT', 2);
define('TWIG_CONTENT_LIST', 3);
define('TWIG_TEMPLATES', 4);

// Misc Defines
define('SUMMARY_DELIMITER', '===');
