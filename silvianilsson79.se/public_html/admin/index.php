<?php 

require_once('../config.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');

$db = new Db();

$categories = $db->getCategories();
$items = $db->getItems();

?>
<?php require_once('header_admin.php'); ?>

<section id="page_container">
	<section id="head">
		<section id="head-left"><h1>Admin</h1></section>
		<section id="head-right"><a href='loggut.php'>Logga ut</a></section>
	</section>

	<section id="center_column">
		<a href="categories">Kategorier</a><br>
		<a href="items">Referenser</a><br>
	</section>
	<?php require_once('footer_admin.php'); ?>
</section>