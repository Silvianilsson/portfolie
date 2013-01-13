<?php

require_once('../classes/config.php');

if(isset($_SESSION['is_logged_in']))
{
	unset($_SESSION['is_logged_in']);
	
}

header('location: /index.php');

?>