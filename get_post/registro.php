<?php 

$errorNombre = "";
$errorApellido = "";

if($_POST){

    if($_POST['nombre'] == ""){
        $errorNombre = "Completa tu nombre por favor.<br>";
    } else if(strlen($_POST['nombre']) < 3){
        $errorNombre = "Por favor, corrija su nombre.";
    }

    if($_POST['apellido'] == ""){
        echo "completa tu apellido por favor.<br>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form action="procesar.php" method="GET">
        <input name="nombre" type="text">
        <input name="apellido" type="text">
        <input type="submit">

    </form>
</body>
</html>