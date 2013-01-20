<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');
require_once(ROOT_PATH.'/classes/help.php');

$db = new Db();

$item = new Item();

$categories = $db->getCategories(); 

?>

<?php require_once('../header_admin.php'); ?>

<section id="page_container">
	<section id="head">
		<section id="head-left"><h1>Ny Referens</h1></section>
		<section id="head-right"><a href='../loggut.php'>Logga ut</a></section>
	</section>	

	<section id="center_column">

		<form action="create.php" method="post">
			<a>title: <input type="text" name="title" value=""></a><br>
			<a>url: <input type="text" name="url" value=""></a><br>
			<a>description: <input type="text" name="description" value=""></a><br>
			<a>kategori: <?php echo select('category_id', 'Kategori: ', $categories)?></a><br>   
			<a>bild: <input type="text" name="bild" value=""></a><br>
			<a><input type="submit" class='btn' value="Lägg till"></a>
		</form>
		<p><a href="/admin/items/index.php">&laquo; Tillbaka</a></p>
	</section>
	<?php require_once('../footer_admin.php'); ?>	
</section>	