<?php
    class Persona{
        public $nombre, $apellido, $edad;

        public function __construct($nom,$ape,$edad){
            $this->nombre = ucwords(strtolower($nom));
            $this->apellido = ucwords(strtolower($ape));
            $this->edad = $edad;

        }


        public function setNombre($nom){
            $this->nombre = ucwords(strtolower($nom));
            return $this;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setApellido($ape){
            $this->apellido = ucwords(strtolower($ape));
            return $this;
        }
        public function getApellido(){
            return $this->apellido;
        }
    }

    // TRAIT SIRVE PARA HACER UNA CLASE PADRE A UNA CLASE (EN PHP, UNA CLASE NO PUEDE SER HIJA DE DOS CLASES)
    trait Latinoamericano{
        public function saludoLatino(){
            echo "HOLA LATINOOOS <br>";
        }
    }

    trait Europeo{
        public function saludoEuropeo(){
            
        }
    }

    class Peruano extends Persona{
        public $departamento, $ciudad;
        use Latinoamericano;

        public function setNombre($nom){
            parent::setNombre($nom); // COPIA EL METODO DEL PADRE
            echo "El nombre se asigno con éxito <br>";
        }
    }

    class Chileno extends Persona{
        use Latinoamericano;

        public $comuna, $region;

    }
?>