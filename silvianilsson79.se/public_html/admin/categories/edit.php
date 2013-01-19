<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');

$id = $_GET['id'];

$db = new Db();

$category = $db->getCategory($id);


?>
<?php require_once('../header_admin.php'); ?>

<section id="page_container">
	<section id="head">
		<section id="head-left"><h1>Redigera</h1></section>
		<section id="head-right"><a href='loggut.php'>Logga ut</a></section>
	</section>

	<section id="center_column">

		<form action="update.php" method="post">
			<a><input type="hidden" name="id" value="<?php echo $category->id ?>"></a></br>
			<a>namn: <input type="text" name="name" value="<?php echo $category->name ?>"></a></br>
			<a><input type="submit" class="btn" value="Uppdatera"></a>
		</form>
		<p><a href="/admin/categories/index.php">&laquo; Tillbaka</a></p>
	</section>
	<?php require_once('../footer_admin.php'); ?>
</section>
