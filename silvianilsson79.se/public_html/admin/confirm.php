<?php

require_once('../classes/config.php');
require_once('../classes/db.php');
require_once('../classes/skydd.php');

$id = $_GET['id'];

$title = $_GET['title'];

?>

<?php require_once('../php/header.php'); ?>

<section>
<h1>Ta bort</h1><a href='loggut.php'>Logga ut</a>
</section>

<form action="/admin/delete.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<p>Är du säker på att du vill ta bort <br><?php echo $title ?></p>
	<button type="submit" >Ta bort</button><a href="/admin">Avbryt</a>
</form>



