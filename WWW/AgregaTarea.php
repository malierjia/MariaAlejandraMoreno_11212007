<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
</head>
<body>
<?php

//se conecta
include_once("includes/database.php");

//crea variable con el id
$idUsuario="";

//Query descrito en word
$queryId= "SELECT IdUsuario, Correo FROM taller1.usuario";


//toma las variables que le llegan de tareas o tareasPerfil
$quien= $_POST["nombre"];
$nombre= $_POST["nombreTarea"];
$fechaI = $_POST["fechaI"];
$fechaF = $_POST["fechaF"];
$prioridad = $_POST["prioridad"];
$descripcion= $_POST["descripcion"];

//se le asigna variable al query
$result = mysqli_query($con,$queryId);

//se recorre el arreglo
while($row = mysqli_fetch_array($result)){

//si el correo de a quien se le asigno esta entre los correos de los usuarios
if($quien == $row['Correo']){

//la variable es igual al IdUsuario del correo correspondiente
$idUsuario= $row["IdUsuario"];
  }
}

//query descrito en word
$query= "INSERT INTO taller1.tarea(`IdTarea`,`Nombre`, `FechaI`, `FechaF`, `Prioridada`, `Descrip`)
VALUES ('', '$nombre', '$fechaI','$fechaF',$prioridad, '$descripcion')";

mysqli_query($con,$query);

//query descrito en word
$queryDos="INSERT INTO taller1.tareausuario(`IdUsuario`, `IdTarea`) VALUES ('$idUsuario','')";

mysqli_query($con,$queryDos);

//despues de agregar va a la pagina inicial
header('Location: perfilUsuario.php');

?>

</body>

</html>
