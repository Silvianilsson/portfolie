<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');


$db = new db();

$item = new Item();

$item->title = $_POST['title'];
$item->url = $_POST['url'];
$item->description = $_POST['description'];
$item->category_id = $_POST['category_id'];
$item->bild = $_POST['bild'];

$db->createItem($item);
header("Location: /admin/items/index.php");

?>