<?php
$item->title = $_POST['title'];

$to      = 'silvia.nilsson@hotmail.com';
$from    = $_POST['email'];
$subject = $_POST['name'];
$message = $_POST['message'];
$headers = 'From:'.$from . "\r\n" .
    'Reply-To:'.$from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
header("Location: /kontakt.php?name=".$subject);
?>