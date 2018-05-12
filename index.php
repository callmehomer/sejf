<?php include 'sejf.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sejf</title>
</head>
<body>
    <?php
    $sejf = new Sejf();
    $isLocked= $sejf->checkIsLocked();
    
    if($isLocked == true){
        $isLocked = "Zablokowany";
    }else{
        $isLocked = "Otwarty";
    }

    echo "Model $sejf->model firmy $sejf->brand <br />";
    echo "Sejf jest $isLocked <br />";
    ?>
    <input type="password" placeholder="Hasło">
    <button>otwórz sejf</button>
</body>
</html>