<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');

$db = new Db();

if (isset($_FILES['thumbnail'])) 
{
	echo 'uploading';
	move_uploaded_file($_FILES['thumbnail']['tmp_name'], UPLOAD_PATH.'/testing.jpg');
}

$item = new Item();

$item->id = $_POST['id'];
$item->title = $_POST['title'];
$item->url = $_POST['url'];
$item->description = $_POST['description'];
$item->category_id = $_POST['category_id'];
$item->bild = $_POST['bild'];

$db->updateItem($item);
//header("Location: /admin/items/edit.php?id=".$item->id);




?>