<?php
    // WHILE
    $a = 1;
    while ($a <= 3) {
        echo "A vale " . $a . "<br>";
        $a++;
    }

    // DO WHILE
    $b = 1;
    do {
        echo "B vale " . $b . "<br>";
        $b++;
    } while ($b <= 7);

    // FOR
    for ($i=1; $i <= 3; $i++) { 
        echo "Ingreso por $i ° vez <br>";
    }

    // FOREACH
    $nombres = ["Joaquin","Roberto", "Armandinho", "El kiki"];
    foreach ($nombres as $indice => $value) {
        echo "El nombre $value está en la posición $indice <br>";

    }
?>