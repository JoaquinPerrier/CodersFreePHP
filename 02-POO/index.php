<?php
    require_once("clases/persona.php");
    require_once("clases/myClass.php");
    require_once("clases/humano.php");
    require_once("carpeta2/humano.php");

    $persona1 = new Persona("Joaquin", "Perrier", 29);

    /*$persona1->setNombre("Joaquin");
    $persona1->apellido = "Perrier";
    $persona1->edad = 20;*/

    // TAMBIEN SE PUEDE INDICAR LOS NOMBRES DE LAS PROPIEDADES AL PASAR LOS VALORES DE LOS PARÁMETROS
    $persona2 = new Persona(apellido:"GUemez", nombre:"RobERRERERtotto",  edad:33);

    // Se puede hacer Fluent interface, si en los métodos agregarmos "RETURN $THIS" para poder seguir ejecutando métodos
    $persona2->setNombre("LA JOACA")
                ->setApellido("PERREKE")
                ->getNombre();

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
            echo "Bienvenido a mi hogar <br>";
        }
    }

    // Propiedades y métodos estáticos en PHP:
    // Se define como propiedad o método estático para poder usarlo, SIN la necesidad de instanciarlo
    class HumanoIndex{
        public static $nombre = "ROBERT GOMEZ BOLAÑOS";

        public static function saludar(){
            echo "Hola mundo <br>";
        }

        public function saludoPersonalizado(){
            // echo "Hola como estás: " . $this->nombre . "<br>"; ASI DA ERROR
            echo "Hola como estás: " . self::$nombre . "<br>"; // Self hace referencia a la clase (y la variable estática de la misma);

        }
    }

    class ArgentinoIndex extends HumanoIndex{
        public function saludoArgentino(){
            echo "Hola saludo argentino " . parent::$nombre . "<br>";
        }
    }

    echo HumanoIndex::$nombre . "<br>"; // Imprime la variable estática $nombre
    HumanoIndex::saludar(); // ejecuta el método estático saludar()
    
    $humanoIndex = new HumanoIndex();
    $humanoIndex->saludoPersonalizado(); // Usa la varible estática, en un método de la clase

    $argentinoIndex = new ArgentinoIndex();
    $argentinoIndex->saludoArgentino();

    // Expresiones regulares
    $cadena = "Av. Lima 123";

    $expresion = "/^    Av/";

    if (preg_match($expresion, $cadena)) {
        echo "La cadena cumple la condición <br>";
    }else{
        echo "La cadena NO cumple la condición <br>";
    }
?>