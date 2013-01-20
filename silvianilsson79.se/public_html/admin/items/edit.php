<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');
require_once(ROOT_PATH.'/classes/help.php');


if (isset($_GET['id'])) 
{
	$id = $_GET['id'];
}


$db = new Db();

$item = $db->getItem($id);
$categories = $db->getCategories();



if (isset($_GET['bild'])) 
{
	$item->bild = $_GET['bild'];
}


?>
<?php require_once('../header_admin.php'); ?>

<section id="page_container">
	<section id="head">
		<section id="head-left"><h1>Redigera</h1></section>
		<section id="head-right"><a href='../loggut.php'>Logga ut</a></section>
	</section>

	<section id="center_column">
		<img class ="thumbnail" src="../../<?php echo RELATIVE_UPLOAD_PATH.$item->bild ?>" />

		<form action="update.php" method="post" enctype="multipart/form-data">
			<a><input type="hidden" name="id" value="<?php echo $item->id ?>"></a></br>
			<a>title: <input type="text" name="title" value="<?php echo $item->title ?>"></a></br>
			<a>url: <input type="text" name="url" value="<?php echo $item->url ?>"></a><br>
			<a>description: <input type="text" name="description" value="<?php echo $item->description ?>"></a><br>
		    <a><input type="hidden" name="category_id" value="<?php echo $item->category_id ?>"></a>
			<a>kategori: <?php echo select('category_id', 'Kategori: ', $categories, $item->category_id)?></a><br>   
			<a>bild: <input type="text" name="bild" value="<?php echo $item->bild ?>"></a><br>
			<a><input type="submit" class="btn" value="Uppdatera"></a>
		</form><br>

		<form action="upload.php" method="post" enctype="multipart/form-data">
			<input name="id" type="hidden" value="<?php echo $item->id ?>">
			<a>ladda upp bild: <input type="file" name="thumbnail" value=""></a><br>
			<a><input type="submit" class="btn" value="Ladda upp"></a>
		</form>


		<p><a href="/admin/items/index.php">&laquo; Tillbaka</a></p>
	</section>
	<?php require_once('../footer_admin.php'); ?>
</section>
