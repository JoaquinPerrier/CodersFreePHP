<?php

    // VARIABLES
    $nombre = "JOAQUIN";
    $apellido = "PERRIER";

    // CONSTANTES
    define("CURSO","CURSO DE PHP 8 DESDE 8");
    define("ANIMALES",["perro", "loro", "hamster"]);

    if(defined("ANIMALES")){
        echo "SI ESTA DEFINIDA";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Mi nombre es <?php echo $nombre ." ". $apellido?></p>
    <p>El curso que estoy realizando es <?php echo CURSO;?></p>
    <p>Me gustaría tener un <?php echo ANIMALES[1];?></p>

    <p>Mi version de PHP es <?php echo PHP_VERSION;?></p>

    <p>La ruta donde me encuentro es <?php echo __FILE__;?></p>




</body>
</html>