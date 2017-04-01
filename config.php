<?php
# / HTTP
// HTTP
    define('HTTP', $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));
    define('HTTP_SERVER', 'http://'.HTTP);
    define('HTTP_IMAGE', 'http://'.HTTP.'image/');
    define('HTTP_ADMIN', 'http://'.HTTP.'admin/');
 
    // HTTPS
    define('HTTPS_SERVER', 'https://'.HTTP);
    define('HTTPS_IMAGE', 'https://'.HTTP.'image/');
 
    // DIR
define('BASE_DIR', realpath(dirname(__FILE__)));
define('DIR_APPLICATION', BASE_DIR.'/catalog/');
define('DIR_SYSTEM', BASE_DIR.'/system/');
define('DIR_IMAGE', BASE_DIR.'/image/');
define('DIR_LANGUAGE', BASE_DIR.'/catalog/language/');
define('DIR_TEMPLATE', BASE_DIR.'/catalog/view/theme/');
define('DIR_CONFIG', BASE_DIR.'/system/config/');
define('DIR_CACHE', BASE_DIR.'/system/storage/cache/');
define('DIR_DOWNLOAD', BASE_DIR.'/system/storage/download/');
define('DIR_LOGS', BASE_DIR.'/system/storage/logs/');
define('DIR_MODIFICATION', BASE_DIR.'/system/storage/modification/');
define('DIR_UPLOAD', BASE_DIR.'/system/storage/upload/');

# / DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'Bossvn');
define('DB_PASSWORD', '77499981abc$Bossvn');
define('DB_DATABASE', 'Bossvn');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
