<!DOCTYPE html>
<html>
<head>
<title>Usuario</title>
<meta charset = "utf-8">
</head>
<body>

<?php

//se conecta
include_once("includes/database.php");

//query descrito en word
$query= "SELECT * FROM taller1.usuario";
//se agregan a un arreglo
$result= mysqli_query($con,$query);

//se crea una tabla con la informacion
echo "<br />";
echo"<h1>Usuarios existentes</h1>";
echo "<table border='1'><tr>
<th>Nombre</th>
<th>Apellido</th>
<th>Correo</th>
</tr>";

//muestro los datos recorriendo el arreglo
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Nombre'] ." </td>";
  echo "<td>" . $row['Apellido'] ." </td>";
  //al hundir el correo la persona puede ver el perfil del link que escogio
  echo "<article id='".$row["Correo"]."'>";
  echo "<td> <a href='usuarioIndividual.php?correo=".$row["Correo"]."'>".$row["Correo"]."</a></td>";
}

echo "</table>";
mysqli_close($con);
?>

<form action="tareas.php">
<br>
<input type="submit" value="Crear tarea">
</form>

<form action="index.php">
<br>
<input type="submit" value="Cerrar Seccion">
</form>

</body>
</html>



