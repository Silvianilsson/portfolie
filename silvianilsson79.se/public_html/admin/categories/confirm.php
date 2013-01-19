<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/item.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');

$id = $_GET['id'];

$name = $_GET['name'];

?>

<?php require_once('../header_admin.php'); ?>

<section id="page_container">
	<section id="head">
		<section id="head-left"><h1>Ta bort</h1></section>
		<section id="head-right"></section>
	</section>

	<section id="center_column">

		<form action="/admin/categories/delete.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<p>Är du säker på att du vill ta bort <br><?php echo $name ?></p>
			<button type="submit" class="btn">Ta bort</button>
			<a href="/admin/categories/" class="cancel-link" >Avbryt</a>
		</form>

	</section>
	<?php require_once('../footer_admin.php'); ?>
</section>