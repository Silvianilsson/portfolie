<?php

require_once('config.php');
require_once(ROOT_PATH.'/classes/db.php');

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
<?php require_once('./php/contact.php'); ?>

<body>
	<section id="page_container">
		<section id="head">
			<section id="head-left">
				<header>
					<a href="index.php"><h1>Silvia Nilsson</h1></a>
				</header>
			</section>
			<section id="head-right">
				<?php require_once('./php/meny.php'); ?>
			</section>
		</section>
		<section>
			<div>
				<a href="<?php echo $item->url ?>">
					<img src="<?php echo $item->bild ?>">
					<img src="<?php echo $item->bild_2 ?>">
					<img src="<?php echo $item->bild_3 ?>">
				</a>
				<p><?php echo nl2br($item->title) ?></p>
				<p>Beskrivning: <strong><?php echo $item->description?></strong></p>
			</div>

			<p><a href="/kurser.php">&laquo; Tillbaka</a></p>
		</section>
		<?php require_once('php/footer.php'); ?>
	</section>

</body>


