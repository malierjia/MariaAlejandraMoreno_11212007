<!DOCTYPE html>
<html>
<head>
<title>ESTUDIANTE</title>
<meta charset = "utf-8">
</head>
<body>

<?php

//se conecta
include_once("includes/database.php");

///QUERY descrito en word
$query= "SELECT taller1.usuario.IdUsuario AS IdUsuario, taller1.usuario.Correo AS Correo,
taller1.tarea.IdTarea AS idTarea, taller1.tarea.Nombre AS Nombre,  taller1.tarea.FechaI AS FechaI, taller1.tarea.FechaF AS FechaF, 
taller1.tarea.Prioridada AS Prioridad, taller1.tarea.Descrip AS Descri
FROM taller1.tareausuario 
RIGHT JOIN taller1.usuario ON taller1.tareausuario.IdUsuario = taller1.usuario.IdUsuario  
 JOIN taller1.tarea ON taller1.tareausuario.IdTarea = taller1.tarea.IdTarea 
 ORDER BY taller1.tarea.FechaI ASC, taller1.tarea.FechaF, taller1.tarea.Prioridada " ;

//QUERY descrito en word
$queryId= "SELECT taller1.usuario.IdUsuario AS IdUsuario, taller1.usuario.Correo AS Correo
FROM taller1.tareausuario 
INNER JOIN taller1.usuario ON taller1.tareausuario.IdUsuario = taller1.usuario.IdUsuario  
 ";
 
//se les asigna a los querys a una variable
$result = mysqli_query($con,$query);
$resultId = mysqli_query($con,$queryId);

//se crea una tabla donde se veran las tareas
echo "<table border='1'>
<tr>
  <th>Nombre</th>
  <th>FechaI</th>
  <th>FechaF</th>
  <th>Prioridad</th>
  <th>Descripcion</th>
</tr>";

//se crea un temporal para comparar el correo y sacar el Id
$tempCorreo = null;
$tempId= null;

//toma el codgio de la url
$codigoUrl=  $_GET['correo'];

//se recorre el arreglo arrojado por el query de la relacion usuario- tareausuario
while($row = mysqli_fetch_array($resultId) ) {

//si el correo de la base de datos es igual que el de la URL
if($row["Correo"]== $codigoUrl){

//se le asigna a una variable el IdUsuario del Correo correspondiente
$tempId= $row["IdUsuario"];

//Se recorre el arreglo de la relacion de las 3 tablas
while($rowId = mysqli_fetch_array($result)){

//Si el Idusuario es igual al temporal
if($rowId["IdUsuario"]==$tempId){
//llena los datos de la tarea
echo"<tr>";
echo"<td>".$rowId["Nombre"]."</td>";
echo"<td>".$rowId["FechaI"]."</td>";
echo"<td>".$rowId["FechaF"]." </td>";
echo"<td>".$rowId["Prioridad"]."</td>";
echo"<td>".$rowId["Descri"]."</td>";

}}}}

//termina tabla
echo "</table>";
echo "</br>";
//hipervinculo para asignar tarea que le entrega el correo por url
echo "<a href='tareasPerfil.php?correo=$codigoUrl'> Asignar Tarea</a>";

?>

<form action="perfilUsuario.php">
<br>
<input type="submit" value="Volver">
</form>


</body>
</html>



