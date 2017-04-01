<?php
// HTTP
define('HTTP', $_SERVER['HTTP_HOST'].str_replace('/admin', '',dirname($_SERVER['PHP_SELF'])));
define('HTTP_SERVER', 'http://'.HTTP.'/admin/');
define('HTTP_CATALOG', 'http://'.HTTP.'/');
define('HTTP_IMAGE', 'http://'.HTTP.'/image/');
 
// HTTPS
define('HTTPS_SERVER', 'https://'.HTTP.'/admin/');
define('HTTPS_IMAGE', 'https://'.HTTP.'/image/');
//trung add 1 line sau
define('HTTPS_CATALOG', 'https://'.HTTP.'/');

// DIR	
define('BASE_DIR', str_replace(DIRECTORY_SEPARATOR.'admin', '', realpath(dirname(__FILE__))));	
define('DIR_APPLICATION', BASE_DIR.'/admin/');
define('DIR_SYSTEM', BASE_DIR.'/system/');
define('DIR_IMAGE', BASE_DIR.'/image/');
define('DIR_LANGUAGE', BASE_DIR.'/admin/language/');
define('DIR_TEMPLATE', BASE_DIR.'/admin/view/template/');
define('DIR_CONFIG', BASE_DIR.'/system/config/');
define('DIR_CACHE', BASE_DIR.'/system/storage/cache/');
define('DIR_DOWNLOAD', BASE_DIR.'/system/storage/download/');
define('DIR_LOGS', BASE_DIR.'/system/storage/logs/');
define('DIR_MODIFICATION', BASE_DIR.'/system/storage/modification/');
define('DIR_UPLOAD', BASE_DIR.'/system/storage/upload/');
define('DIR_CATALOG', BASE_DIR.'/catalog/');
	

# / DB chi edit cai nay con lai giu nguyen._trung
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'Bossvn');
define('DB_PASSWORD', '77499981abc$Bossvn');
define('DB_DATABASE', 'Bossvn');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
