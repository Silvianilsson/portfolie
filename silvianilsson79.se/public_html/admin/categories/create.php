<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');

$db = new db();

$category = new Category();

$category->name = $_POST['name'];

$db->createCategory($category);
header("Location: /admin/categories/index.php");

?>