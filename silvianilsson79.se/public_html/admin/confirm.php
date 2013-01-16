<?php

require_once('../classes/config.php');
require_once('../classes/db.php');
require_once('../classes/skydd.php');

$id = $_GET['id'];

$title = $_GET['title'];

?>

<?php require_once('header_admin.php'); ?>

<section id="page_container">
	<section id="head">
		<section id="head-left"><h1>Ta bort</h1></section>
		<section id="head-right"><a href='loggut.php'>Logga ut</a></section>
	</section>

	<section id="center_column">

		<form action="/admin/delete.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<p>Är du säker på att du vill ta bort <br><?php echo $title ?></p>
			<button type="submit" class="btn">Ta bort</button><a href="/admin" >Avbryt</a>
		</form>

	</section>
	<?php require_once('footer_admin.php'); ?>
</section>