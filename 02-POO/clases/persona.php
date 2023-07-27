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
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setApellido($ape){
            $this->apellido = ucwords(strtolower($ape));
        }
        public function getApellido(){
            return $this->apellido;
        }
    }

    class Peruano extends Persona{
        public $departamento, $ciudad;

        public function setNombre($nom){
            parent::setNombre($nom); // COPIA EL METODO DEL PADRE
            echo "El nombre se asigno con éxito <br>";
        }
    }

    class Chileno extends Persona{
        public $comuna, $region;

    }
?>