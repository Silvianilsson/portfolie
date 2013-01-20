<?php 

require_once('../../config.php');
require_once(ROOT_PATH.'/classes/skydd.php');

$id = $_POST['id'];

if (isset($_FILES['thumbnail'])) 
{
	$tmp_name=$_FILES['thumbnail']['tmp_name'];
	$filename=$_FILES['thumbnail']['name'];
	echo 'uploading '.$filename;
	move_uploaded_file($tmp_name, UPLOAD_PATH.$filename);
	header("Location: /admin/items/edit.php?id=".$id."&bild=".$filename);
}
else 
{
	header("Location: /admin/items/edit.php");
}
?>