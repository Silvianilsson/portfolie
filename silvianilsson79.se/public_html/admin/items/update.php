<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');

$db = new Db();

//skapar ett nytt item objekt
$item = new Item();

if (isset($_FILES['thumbnail'])) 
{
	$tmp_name=$_FILES['thumbnail']['tmp_name'];
	$filename=$_FILES['thumbnail']['name'];
	move_uploaded_file($tmp_name, UPLOAD_PATH.$filename);
}

//fyller i värderna 
$item->id = $_POST['id'];
$item->title = $_POST['title'];
$item->url = $_POST['url'];
$item->description = $_POST['description'];
$item->category_id = $_POST['category_id'];
$item->bild = $filename;

//den uppdaterar item i databaser
$db->updateItem($item);
header("Location: /admin/items/edit.php?id=".$item->id);
?>