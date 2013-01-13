<?php

require_once('../classes/config.php');
require_once('../classes/db.php');
require_once('../classes/skydd.php');

$id = $_POST['id'];

$db = new Db();

$db->deleteItem($id);

header("Location: /admin/index.php?");
?>