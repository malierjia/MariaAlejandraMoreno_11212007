<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
</head>

<body>
<?php

//se conecta
include_once("includes/database.php");

//variables que reciben lo que llega de estudiantes.php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$contrasena= $_POST["contrasena"];

//inserta los datos en la base de datos, query descrito en word
$query= "INSERT INTO taller1.usuario (`IdUsuario`, `Nombre`, `Apellido`, `Correo`, `Contrasena`) 
VALUES ('', '$nombre','$apellido','$correo', '$contrasena')";

mysqli_query($con,$query);

//cuando acaba vuelve a la pagina de login
header('Location: index.php');
?>

</body>
</html>

