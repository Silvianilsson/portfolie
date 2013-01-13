<?php

require_once('../classes/config.php');

if (isset($_POST['username']))
{   
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == USER && $password == PASS)
	{
		
		$_SESSION['is_logged_in'] = true;
		header("Location: /admin/index.php");
		
	}
	else
	{
		header("Location: /admin/login.php");
	}
}


?>