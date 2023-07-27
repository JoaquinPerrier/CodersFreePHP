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
    }
?>