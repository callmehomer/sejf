<?php include 'sejf.php';

$sejf = new Sejf();

if($_POST["password"] == $sejf->getPassword()){
 

header('Location: sejf_body.php');

}
else{
    echo "zle haslo";
}
?>