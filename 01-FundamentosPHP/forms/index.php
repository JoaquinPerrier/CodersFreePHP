<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- En action se pone a donde se envia la data -->
    <form action="procesar.php" method="POST" enctype="multipart/form-data">
        <!-- En el input, en name va el nombre que se usa la var en el back -->
        <label>Nombre: <input type="text" name="nombre"></label>
        <label>Apellido: <input type="text" name="apellido"></label>
        <label>Edad: <input type="number" name="edad"></label>

        <p><b><u>Sexo:</u></b></p>
        <label>Masculino <input type="radio" name="sexo" value="masc"></label>        <label>Femenino <input type="radio" name="sexo" value="fem"></label>
        <br>

        <p><b><u>Opciones:</u></b></p>
        <label>Opt1 <input type="checkbox" name="opciones[]" value="opt1"></label>        <label>Opt2 <input type="checkbox" name="opciones[]" value="opt2"></label>
        <label>Opt3 <input type="checkbox" name="opciones[]" value="opt3"></label>        <label>Opt4 <input type="checkbox" name="opciones[]" value="opt4"></label>
        <br>
        <br>
        <br>

        <label>Imagen: <input type="file" name="image"></label>
        <br>



        <br>
        <button type="submit">Enviar!</button>
    </form>
</body>
</html>