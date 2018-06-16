<?php include 'sejf.php';

$sejf = new Sejf();

$newContent = $_POST["newsecret"];
$sejf -> setContent($newContent);
$content = $sejf -> getContent();

echo $content;
// header('Location: sejf_body.php');

?>