<?php
    // if, else y elseif
    $a = 5;
    $b = 1;

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

    // Switch y Match
    switch ($a) {
        case 1:
            echo "A vale 1 <br>";
            break;
        
        case 2:
            echo "A vale 2 <br>";
            break;
        
        case 3:
            echo "A vale 3 <br>";
            break;
        
        default:
            echo "A no vale ni 1, ni 2, ni 3 <br>";
            break;
    }

    echo match ($b) {
        1 => "B es 1 <br>",
        2 => "B es 2 <br>",
        default => "B no es ni 1, ni 2"
    }
?>
