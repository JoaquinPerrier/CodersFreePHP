<?php
    // if, else y elseif
    $a = 5;
    $b = 2;

    if($a > $b){
        echo "A es MAYOR que B <br>";
    }else if($a < $b){
        echo "A es MENOR que B <br>";
    }else {
        echo "La condición es ELSE <br>";
    }

    // Ternarios
    $valor = $a>$b? "A es MAYOR que B POR TERNARIO <br>" : "A es MENOR que B POR TERNARIO<br>";
    echo $valor;
?>
