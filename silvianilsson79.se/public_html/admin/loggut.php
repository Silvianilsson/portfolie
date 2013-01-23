<?php

require_once('../config.php');

//om inloggad loggar ut
if(isset($_SESSION['is_logged_in']))
{
	unset($_SESSION['is_logged_in']);	
}
header('location: /index.php');

?>