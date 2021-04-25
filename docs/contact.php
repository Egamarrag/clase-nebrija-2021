<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$para = "erickgamarraguerra@gmail.com";
$asunto = "Asunto del mensaje";
mail($para, $asunto, utf8_decode($message), $header);
header("Location:index.tml");
?>
