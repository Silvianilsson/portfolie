<?php

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/skydd.php');


$id = $_POST['id'];

$db = new Db();

$db->deleteItem($id);

header("Location: /admin/items/index.php?");
?>