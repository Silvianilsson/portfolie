<?php

require_once('classes/config.php');
require_once('classes/db.php');

if (isset($_GET['id'])) 
{
	$id = $_GET['id'];
}

$db = new Db();
$item = $db->getItem($id);

if (!$item) 
{	
	header('HTTP/1.0 404 not found');
	exit();
}

$page_title = $item->title;

?>

<?php require_once('./php/header.php'); ?>

<div class="row-fluid marketing">
	<div class="span12 portfolio-item">
		<a href="/show.php?id=<?php echo $item->id ?>">
			<img src="http://placehold.it/250x250" class="img-polaroid">
		</a>
		<p><?php echo nl2br($item->id) ?></p>
		<p>Kategori: <strong><?php echo $item->title?></strong></p>
	</div>
</div>

<p><a href="/kurser.php">&laquo; Tillbaka</a></p>

<?php require_once('php/footer.php'); ?>
