<?php
class MyClass{
    public $public = "Public";
    protected $protected = "Protected"; // NO PUEDE ACCEDER DESDE AFUERA
    private $private = "Private"; // NO PUEDE ACCEDER DESDE AFUERA
    // LAS PROPIEDADES PRIVADAS NO SE PUEDEN ACCEDER DESDE EL HIJO. LAS PROTEJIDAS SI

    function printHello(){
        echo $this->public . "<br>";
        echo $this->protected . "<br>";
        echo $this->private . "<br>";
    }
}

class MyClass2 extends MyClass{
    function printHello(){
        echo $this->public . "<br>";
        echo $this->protected . "<br>";
        // echo $this->private . "<br>";
    }
}
?>