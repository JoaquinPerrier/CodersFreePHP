<?php
$array = [10, 8, 6 , 5, 6];

// AGREGA UN ELEMENTO AL FINAL
$array[] = 0;

$array2=["nombre"=>"Joaquín", "edad"=> 29, "localidad"=>"Rosario"];

list($a,$b,$c) = $array;
echo $a . "<br>";

echo $array[5] . "<br>";
echo $array2["nombre"] . " " . $array2["edad"] . " " .  $array2["localidad"] . "<br>";

$arrayMultidimensional = [["nombre"=>"Joaquín", "edad"=> 29, "localidad"=>"Rosario"],
["nombre"=>"Alvaro", "edad"=> 34, "localidad"=>"Zavalla"],["nombre"=>"Claudia", "edad"=> 29, "localidad"=>"Venado Tuerto"]];

echo $arrayMultidimensional[2]["nombre"] . "<br>";
?>