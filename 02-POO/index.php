<?php
    require_once("clases/persona.php");

    $persona1 = new Persona("Joaquin", "Perrier", 29);

    /*$persona1->setNombre("Joaquin");
    $persona1->apellido = "Perrier";
    $persona1->edad = 20;*/


    $persona2 = new Persona("RobERRERERtotto", "GUemez", 33);

    /*$persona2->setNombre("RobERRERERtotto");
    $persona2->apellido = "Guemez";
    $persona2->edad = 22;*/

    echo "El nombre de la persona 1 es: " . $persona1->getNombre() . "<br>";
    echo "El nombre de la persona 2 es: " . $persona2->getNombre() . "<br>";

    $peruano = new Peruano("TITO", "EL PERUANITO", 19);

    $peruano->setNombre("ROCKER");

    $chileno = new Chileno("ALONSO", "EL CHILOCA", 29);


    var_dump($peruano); 

?>