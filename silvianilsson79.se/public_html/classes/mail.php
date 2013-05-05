<?php
$item->title = $_POST['title'];

$to      = 'silvia.nilsson@hotmail.com';
$from    = $_POST['email'];
$subject = 'name';
$message = $_POST['message'];
$headers = 'From: silvia.nilsson@hotmail.com' . "\r\n" .
    'Reply-To: silvia.nilsson@hotmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>