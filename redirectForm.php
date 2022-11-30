<?php include $_SERVER['DOCUMENT_ROOT'].'/functions/functions.php'; 

$name = $_POST['name'];
$main = $_POST['Main'];
$message = $_POST['message'];

header("Location: /form.php?main=$main&name=$name&message=$message");

?>