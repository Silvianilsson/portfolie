<?php require_once('../classes/config.php'); ?>



<?php require_once('header_admin.php'); ?>

		<h1>Logga in</h1>
		<form action="signin.php"  method="post" >
			<a>Användarnamn:<input type="text" name="username" value=""></a></br>
			<a>Lösenord:<input type="password" name="password" value=""></a></br>
			<input type="submit" value="Logga in"> 
		</form>

