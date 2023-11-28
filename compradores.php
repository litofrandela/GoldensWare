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
$username = "id21540141_ware";
$password = "Perro@12";
$database = "id21540141_goldens";

$conn = mysqli_connect($servername,$username, $password, $database);

if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
} else{
    echo "todo correcto";
}

$DNI = $_POST['dni'];
$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$Correo = $_POST['correo'];

$sql = "INSERT INTO compradores(dni, nombre, apellido, correo) VALUES ('$DNI','$Nombre','$Apellido','$Correo')";

?>
 
</body>
</html>