 <?php

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');

$db = new Db();

$categories = $db->getCategories();

?>
<?php require_once('../header_admin.php'); ?>

<section id="page_container">
	<section id="head">
		<section id="head-left"><h1>Kategori</h1></section>
		<section id="head-right"><a href='../loggut.php'>Logga ut</a></section>
	</section>

	<section id="center_column">
		<a href="/admin/categories/new.php">Lägg till</a></br>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Namn</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($categories as $category) : ?>
				<tr>
					<td><?php echo $category->id ?></td>
					<td><?php echo $category->name ?></td>
					<td>
						<a href="/admin/categories/edit.php?id=<?php echo $category->id ?>">Redigera</a> |
						<a href="/admin/categories/confirm.php?id=<?php echo $category->id ?>&name=<?php echo $category->name ?>">Ta bort</a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		<p><a href="/admin/index.php">&laquo; Tillbaka</a></p>
	</section>
	<?php require_once('../footer_admin.php'); ?>
</section>