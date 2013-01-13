<?php

require_once('../classes/config.php');
require_once('../classes/db.php');
require_once('../classes/skydd.php');

$db = new Db();

$item = new Item();

$item->id = $_POST['id'];
$item->title = $_POST['title'];
$item->url = $_POST['url'];
$item->description = $_POST['description'];
$item->category = $_POST['category'];
$item->bild = $_POST['bild'];

$db->updateItem($item);
header("Location: /admin/edit.php?id=".$item->id);




?>