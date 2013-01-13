<?php

require_once('../classes/config.php');
require_once('../classes/db.php');
require_once('../classes/skydd.php');

$db = new db();

$item = new Item();

$item->title = $_POST['title'];
$item->url = $_POST['url'];
$item->description = $_POST['description'];
$item->category = $_POST['category'];
$item->bild = $_POST['bild'];

$db->createItem($item);
header("Location: /admin/index.php");

?>