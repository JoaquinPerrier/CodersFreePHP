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

    // TIPOS DE VARIABLES
    // Integer
    $edad = 29;
    // Float
    $promedio = 23.65;
    // String
    $cadena = 'Hola mundo "SAD"';
    // Booleano
    $isLogged = true;

    // OPERADORES MATEMATICOS Y DE ASIGNACION
    // Asignación
    $var1 = "variable N° 1";
    $edadNegativa = -$edad;
    $a = 2;
    $b = 5;
    // Suma y resta
    $c = $a + $b;
    $c = $a - $b;
    // Division y multiplicación
    $c = $a / $b;
    $c = $a * $b;
    // Modulo (o resto)
    $c = $a % $b;

    // OPERADORES LÓGICOS Y DE COMPARACIÓN
    $x = 10;
    $y = 10;

    // Igual
    var_dump($y == $x);
    // Distintos
    var_dump($y <> $x);
    var_dump($y != $x);
    // Mayor o mayor igual
    var_dump($y > $x);
    var_dump($y >= $x);
    // Menor o menor igual
    var_dump($y < $x);
    var_dump($y <= $x);

    // y
    var_dump($y && $x);
    // o
    var_dump($y || $x);

    // OPERADORES DE ASIGNACIÓN COMBINADA
    // Incremento
    $a++;
    ++$a;
    // Decremento
    $a--;
    --$a;
    // Suma y resta
    $w += $a;
    $y -= $a;


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
    <p>La edad negativa es: <?php echo $edadNegativa;?></p>

</body>
</html>