<?php
//area script PHP
    $pg = 1;
    if(isset($_GET["pg"])){
        $pg = $_GET["pg"];
    }

    switch($pg){
        case 1:
            $content = "<h1>Page 01</h1>";
            $judulpage = "Page 01"; 
            break;
        case 2:
            $content = "<h1>Page 02</h1>";
            $judulpage = "Page 02"; 
            break;
        case 3:
            $content = "<h1>Page 03</h1>";
            $judulpage = "Page 03"; 
            break;
        default:
            $content = "<h1>Page 01</h1>";
            $judulpage = "Page 01"; 
            break;
    }
    $judulpage = "Latihan Dian 02"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<ul class="nav">
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="?pg=1">Page 1</a></li>
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="?pg=2">Page 2</a></li>
    <li class="nav-item"><a class="nav-link active" aria-current="page" href="?pg=3">Page 3</a></li>
</ul>
    <?=$content;?>
</body>
</html>