<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');

$db = new Db();

$category = new Category();

$category->id = $_POST['id'];
$category->name = $_POST['name'];

$db->updateCategory($category);
header("Location: /admin/categories/edit.php?id=".$category->id);




?>