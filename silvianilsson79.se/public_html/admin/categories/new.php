<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');

?>

<?php require_once('../header_admin.php'); ?>

<section id="page_container">
	<section id="head">
		<section id="head-left"><h1>Ny Kategori</h1></section>
		<section id="head-right"><a href='../loggut.php'>Logga ut</a></section>
	</section>	

	<section id="center_column">

		<form action="create.php" method="post">
			<a>Namn: <input type="text" name="name" value=""></a><br>
			<a><input type="submit" class='btn' value="Lägg till"></a>
		</form>
		<p><a href="/admin/items/index.php">&laquo; Tillbaka</a></p>
	</section>
	<?php require_once('../footer_admin.php'); ?>	
</section>	