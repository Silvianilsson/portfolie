<?php

$meny = array();
$meny[] = array('text' => 'Hem', 'url' => 'index.php');  
$meny[] = array('text' => 'Ommig', 'url' => 'ommig.php');
$meny[] = array('text' => 'Kontakt', 'url' => 'kontakt.php');
$meny[] = array('text' => 'Foton', 'url' => 'foton.php');
$meny[] = array('text' => 'Länkar', 'url' => 'links.php');
?>

<?php $current_url = $_SERVER['REQUEST_URI']; ?>


<ul id="list-nav">
	<?php foreach ($meny as $meny_item) : ?>

	<?php
	$cssClass = '';

	if ($meny_item['url'] == $current_url)
	{
		$cssClass = 'class="selected"';
	}
	?>

	<li<?php echo $cssClass; ?>>
	<a href="<?php echo $meny_item['url']; ?>">
		<?php echo $meny_item['text']; ?>
	</a>
</li>
<?php endforeach ?>
</ul>


