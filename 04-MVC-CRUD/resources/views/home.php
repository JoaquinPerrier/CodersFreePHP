<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Hola desde la página HOME!</h1>

    <p>  <b>Título: </b><?php echo $title?></p>
    <p>  <b>Descripción: </b><?php echo $description?></p>
    <?php var_dump($dataDesdeDB);?>
</body>
</html>