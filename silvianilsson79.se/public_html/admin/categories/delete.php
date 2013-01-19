<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');


$id = $_POST['id'];

$db = new Db();

$db->deleteCategory($id);

header("Location: /admin/categories/index.php?");
?>