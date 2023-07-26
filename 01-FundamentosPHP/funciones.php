<?php
    echo "Marca de tiempo: " . time() . "<br>";
    echo "Raiz cuadrada de nueve: " . sqrt(9) . "<br>";
    echo "Número aleatorio entre 90 y 100: " . rand(90,100) . "<br>";
    echo "Número pi: " . pi() . "<br>";

    // Realizar factorial de 9
    function factorial($numero){
        $resultado = 1;
        for ($i=1; $i <= $numero ; $i++) { 
            $resultado = $resultado * $i;
        }
        echo "El factorial de " . $numero. " es " .$resultado . "<br>";
        return $resultado;
    }

    $resultadoFactorial = factorial(15);
    echo $resultadoFactorial . "<br>";

    // LAS VARIABLES SE PUEDEN ACCEDER DENTRO DE UN MISMO FICHERO, PERO NO DENTRO DE UNA FUNCION
    $test = 5;
    function test(){
    global $test; // PARA PODER TOMAR LA VARIABLE DE AFUERA
    echo $test . "<br>";
    }

    test();

    // PARA PASAR UN PARAMETRO POR REFERENCIA:
    $b = 5;
    function test2(&$n){
        $n = $n + 20;
    }

    test2($b);
    echo $b . "<br>";

    // VALORES POR DEFECTO COMO PARAMS
    function valoracion($nombreCurso, $rating = 3){
        echo "El curso de $nombreCurso tiene un rating de $rating  <br>";
    }

    valoracion("PHP 8", 9);

    // CUANDO NO SE SABE LA CANTIDAD DE PARAMETROS A PASAR
    function concatenar(...$palabras){
        $resultado = "";
        foreach ($palabras as $key => $palabra) {
           $resultado .=  $palabra . " "; 
        }
        echo $resultado . "<br>";
    }

    concatenar("HOla", "Tito", "Como va?");

    // Funciones con tipado definido. INDICA EL TIPO DE VALOR QUE PASA COMO ARGUMENTO
    // declare(strict_types=1); PARA OBLIGAR A PASAR EL TIPO DE PARAMETRO CORRECTO
    function sumarEnteros(int $entero1, int $entero2):int|float{
        return $entero1 + $entero2;
    }
    
    $result = sumarEnteros(20,10);
    echo $result . "<br>";
?>