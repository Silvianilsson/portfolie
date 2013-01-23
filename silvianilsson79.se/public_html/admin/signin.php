<?php

require_once('../config.php');

// om användar namnet är satt försök logga in
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