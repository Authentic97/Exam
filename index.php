<?php

//die;
require_once("model/ouvrage.model.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php?view=1">Ouvrages</a></li>
            <li><a href="index.php?view=2">Exemplaires</a></li>
            <li><a href="index.php?view=3">Prets</a></li>
        </ul>
    </div>
<?php 
if (isset($_GET['view'])){
    //$view=$_GET["view"];
    extract($_GET);
    if($view==1){
        require_once("views/ouvrage.html.php"); 
    }elseif ($view==2){
        require_once("views/exemplaire.html.php");
    }elseif ($view==3){
        require_once("views/auteur.html.php");
    }elseif ($view==4){
        require_once("views/pret.html.php");
    }
}else{
    require_once("views/ouvrage.html.php");
}

?>
</body>
</html>