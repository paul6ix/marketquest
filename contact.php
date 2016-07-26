<?php
$name = $_POST['name'];
$email = $_POST['mail'];
$message = $_POST['comment'];
$to = "okporp@gmail.com";
$subject = "New Message";
mail($to, $subject, $message, "from " . $name);
echo "Your Message have been sent successfully";

?>