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
<<<<<<< HEAD
$servername = "localhost";
$username = "id21540141_ware";
$password = "Perro@12";
=======

$servername = "localhost";
$username = "id21540141_ware";
$password = "Elmascapo123-";
>>>>>>> 81f96482a1ffc38a5a6230b4231779e81a1b8317
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

<<<<<<< HEAD
$sql = "INSERT INTO compradores(dni, nombre, apellido, correo) VALUES ('$DNI','$Nombre','$Apellido','$Correo')";
=======
$sql = "INSERT INTO compradores( DNI, Nombre, Apellido, Correo) VALUES ('DNI','Nombre','Apellido','Correo')";
>>>>>>> 81f96482a1ffc38a5a6230b4231779e81a1b8317

?>
 
</body>
</html>