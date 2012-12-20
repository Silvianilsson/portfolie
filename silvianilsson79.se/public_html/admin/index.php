<?php

require_once('../classes/config.php');
require_once('../classes/db.php');

$db = new Db();

$items = $db->getItems();
?>
<?php require_once('../php/header.php'); ?>


<table class="table table-hover">
	<thead>
		<tr>
			<th>Titel</th>
			<th>Beskrivning</th>
			<th>Kategori</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($items as $item) : ?>
		<tr>
			<td><a href="/show.php?id=<?php echo $item->id ?>"><?php echo $item->title ?></a></td>
			<td><?php echo $item->description?></td> 
			<td><?php echo $item->category?></td>
			<td>
				<a href="/admin/edit.php?id=<?php echo $item->id ?>">Redigera</a> |
				<a href="/admin/delete.php?id=<?php echo $item->id ?>">Ta bort</a>
			</td>
		</tr>
	<?php endforeach ?>
</tbody>
</table>