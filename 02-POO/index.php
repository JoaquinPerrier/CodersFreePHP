<?php
    require_once("clases/persona.php");
    require_once("clases/myClass.php");
    require_once("clases/humano.php");
    require_once("carpeta2/humano.php");

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
    echo "<br>";

    $objetoMyClass = new myClass();

    $objetoMyClass->printHello();
    
    $objetoMyClass2 = new myClass2();

    $objetoMyClass2->printHello();
    $peruano->saludoLatino();
    // echo $objetoMyClass->protected;
    // echo $objetoMyClass->private;

    $humano = new clases\Humano();
    $humano2 = new carpeta2\Humano();

    $humano->saludar();
    $humano2->saludar();

    // Se agrega la palabra FINAL para que no pueda ser extendida por otra
    // También se puede utilizar en los métodos, para que no se sobrescriban
    final class Hogar{
        public $color, $seguridad;

        final public function saludar(){
            echo "Bienvenido a mi hogar <br>"
        }
    }

?>