<?php
// EN LA VARIABLE GLOBAL $_GET O $_POST, SE GUARDA LA DATA ENVIADA DESDE EL FORM (SI EL FORM ES GET)
/*$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];*/

/*$apellido = $_POST["apellido"];
$nombre = $_POST["nombre"];*/

// TAMBIEN SE PUEDE USAR $_REQUEST Y ES UNIVERSAL
$nombre = $_REQUEST["nombre"];
$apellido = $_REQUEST["apellido"];
$edad = $_REQUEST["edad"];
$sexo = $_REQUEST["sexo"];
$opciones = $_REQUEST["opciones"];

$image = $_FILES["image"];
$path = $_SERVER["DOCUMENT_ROOT"] . "/CodersFreePHP/01-FundamentosPHP/forms". "/" .  $image["name"];
$path2 = 'C:\xampp\htdocs\CodersFreePHP\01-FundamentosPHP\forms'."\Sin título.png";



echo $nombre . " " . $apellido . " tiene ".$edad. " años.". "<br>";
echo "El sexo de " .$nombre . " " . $apellido ." es ". $sexo. "<br>";
echo "<ul>";
foreach ($opciones as $key => $value) {
    echo "<li>$value</li>";
}
echo "</ul>";

var_dump($image);

move_uploaded_file($image["tmp_name"], $path );



//C:\xampp\htdocs\CodersFreePHP\01-FundamentosPHP\forms
//C:/xampp/htdocs/01-FundamentosPHP/forms/Sin título.png
?>