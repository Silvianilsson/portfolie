<?php

if (!isset($_SESSION['is_logged_in']))
{ 
	$_SESSION['return_to'] = $_SERVER['REQUEST_URI'];
	header('location:/admin/login.php');
}

?>