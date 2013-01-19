<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');


if (isset($_GET['id'])) 
{
	$id = $_GET['id'];
}

$db = new Db();

$item = $db->getItem($id);

?>
<?php require_once('../header_admin.php'); ?>

<section id="page_container">
	<section id="head">
		<section id="head-left"><h1>Redigera</h1></section>
		<section id="head-right"><a href='../loggut.php'>Logga ut</a></section>
	</section>

	<section id="center_column">

		<form action="update.php" method="post" enctype="multipart/form-data">
			<a><input type="hidden" name="id" value="<?php echo $item->id ?>"></a></br>
			<a>title: <input type="text" name="title" value="<?php echo $item->title ?>"></a></br>
			<a>url: <input type="text" name="url" value="<?php echo $item->url ?>"></a><br>
			<a>description: <input type="text" name="description" value="<?php echo $item->description ?>"></a><br>
			<a>kategori <input type="text" name="category_id" value="1"></a>
			<a>category: <select>
							<option value="category_id">1</option>
							<option value="category_id">2</option>
						 </select> </a><br>
			<a>bild: <input type="text" name="bild" value="<?php echo $item->bild ?>"></a><br>
			<a>ladda upp bild: <input type="file" name="thumbnail" value=""></a><br>
			<a><input type="submit" class="btn" value="Uppdatera"></a>
		</form>
		<p><a href="/admin/items/index.php">&laquo; Tillbaka</a></p>
	</section>
	<?php require_once('../footer_admin.php'); ?>
</section>
