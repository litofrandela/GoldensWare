<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="">Ir a la pagina principal</a>
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}

$objeto = $_POST['O1'];
$detalle = $_POST['D1'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];

$sql = "INSERT INTO `compradores`( objeto, detalle, precio, imagen) VALUES ('$objeto','$detalle','$precio','$imagen')";

?>
<br>

 
</body>
</html>