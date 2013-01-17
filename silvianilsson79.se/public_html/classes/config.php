<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

define('ROOT_PATH', dirname(__FILE__));

define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'portfolio');
define('DB_HOST', 'localhost');

define('USER', 'admin');
define('PASS', 'mayoren&&&');

date_default_timezone_set('Europe/Stockholm');
?>