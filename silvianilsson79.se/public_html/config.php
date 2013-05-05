<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');
define('ROOT_PATH', dirname(__FILE__));
define('UPLOAD_PATH', ROOT_PATH.'/images/upload/');
define('RELATIVE_UPLOAD_PATH', './images/upload/');
define('DB_USER', '161897_cj83925');
define('DB_PASS', 'root');
/*define('DB_NAME', 'portfolio');
define('DB_HOST', 'localhost');*/
define('DB_NAME', '161897-portfolie');
define('DB_HOST', '193.17.218.165');
define('USER', 'admin');
define('PASS', 'mayoren&&&');
date_default_timezone_set('Europe/Stockholm');
setlocale(LC_ALL, 'sv_SE.UTF-8', 'sve');  
header('Content-Type: text/html; charset=UTF-8');
?>