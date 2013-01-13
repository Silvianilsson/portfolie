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
<?php require_once('header_admin.php'); ?>

<section>
<h1>Redigera</h1><a href='loggut.php'>Logga ut</a>
</section>

<form action="update.php" method="post">
	<a>id: <input type="text" name="id" value="<?php echo $item->id ?>"></a></br>
	<a>title: <input type="text" name="title" value="<?php echo $item->title ?>"></a></br>
	<a>url: <input type="text" name="url" value="<?php echo $item->url ?>"></a><br>
	<a>description: <input type="text" name="description" value="<?php echo $item->description ?>"></a><br>
	<a>category: <input type="text" name="category" value="<?php echo $item->category ?>"></a><br>
	<a>bild: <input type="text" name="bild" value="<?php echo $item->bild ?>"></a><br>
	<a><input type="submit" value="Uppdatera"></a>
</form>



