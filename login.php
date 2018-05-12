<?php include 'sejf.php';

$sejf = new Sejf();
$i=0;

if($_POST["password"] == $sejf->getPassword()){
 

header('Location: sejf_body.php');

}
else{
    echo "zle haslo";
}
?>