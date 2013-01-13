<?php

require_once('../classes/config.php');
require_once('../classes/db.php');
require_once('../classes/skydd.php');

$db = new Db();

$items = $db->getItems();

?>
<?php require_once('../php/header.php'); ?>

<section>
<h1>Referenser</h1><a href='loggut.php'>Logga ut</a>
</section>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Titel</th>
			<th>Kategori</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($items as $item) : ?>
		<tr>
			<td><a id="referenser"  href="<?php echo '../' . $item->url ?>"><?php echo $item->title ?></a></td>
			<td><?php echo $item->category?></td>
			<td>
				<a href="/admin/edit.php?id=<?php echo $item->id ?>">Redigera</a> |
				<a href="/admin/confirm.php?id=<?php echo $item->id ?>&title=<?php echo $item->title ?>">Ta bort</a>
			</td>
		</tr>
	<?php endforeach ?>
</tbody>
</table>