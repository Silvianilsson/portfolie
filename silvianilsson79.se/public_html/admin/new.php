<?php

require_once('../classes/config.php');
require_once('../classes/db.php');
require_once('../classes/skydd.php');

?>

<?php require_once('../php/header.php'); ?>

<h1>Ny Referens</h1>
<form action="create.php" method="post">
	title: <input type="text" name="title" value=""><br>
	url: <input type="text" name="url" value=""><br>
	description: <input type="text" name="description" value=""><br>
	category: <input type="text" name="category" value=""><br>
	bild: <input type="text" name="bild" value=""><br>
	<input type="submit" value="Lägg till">
</form>