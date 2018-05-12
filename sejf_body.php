<?php include 'sejf.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Sejf</title>
</head>
<body>
<div class="container text-center">
    <nav class="nav">
        <a href="#" onclick="close();">zamknij sejf</a>
    </nav>

    <?php
    $sejf = new Sejf();
    $isLocked = $sejf->unlock();
    $content = $sejf -> getContent();
    if($isLocked == true){
        $isLocked = "Zablokowany";
    }else{
        $isLocked = "Otwarty";
    }
    
    echo "Sejf jest $isLocked <br /><br />";
    echo $content["Sabina"];

   
    ?>

</div>

</body>
</html>