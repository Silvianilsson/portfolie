<?php 

require_once('../classes/config.php'); 
require_once('../classes/db.php'); 

$id=4;
$db = new Db();
$items = $db->getItems();

if ($items) 
{
    echo 'hittade den <br>';
    foreach ($items as $item ) 
    {
    	echo "id" . $item->id . 'title' . $item->title . '<br>';
    }
}

 else  echo $items[2]->title; 
 ?>