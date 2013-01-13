<?php

require_once('../classes/config.php');
require_once('../classes/db.php');
require_once('../classes/skydd.php');

if (isset($_GET['id'])) 
{
	$id = $_GET['id'];
}

$db = new Db();

$item = $db->getItem($id);


?>
<?php require_once('../php/header.php'); ?>

<section>
<h1>Redigera</h1><a href='loggut.php'>Logga ut</a>
</section>

<form action="update.php" method="post">
	id: <input type="text" name="id" value="<?php echo $item->id ?>"><br>
	title: <input type="text" name="title" value="<?php echo $item->title ?>"><br>
	url: <input type="text" name="url" value="<?php echo $item->url ?>"><br>
	description: <input type="text" name="description" value="<?php echo $item->description ?>"><br>
	category: <input type="text" name="category" value="<?php echo $item->category ?>"><br>
	bild: <input type="text" name="bild" value="<?php echo $item->bild ?>"><br>
	<input type="submit" value="Uppdatera">
</form>



