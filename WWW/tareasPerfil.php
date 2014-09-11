<!DOCTYPE html>

<html>
<head> 
<title> Tareas </title>
<meta charset = "utf-8">
</head>

<body>

<?php

//se conecta
include_once("includes/database.php");

//se toma el correo de la URL
$codigoUrl=  $_GET['correo'];
?>


<br>
<h1>Asignar tarea</h1>

<form action="AgregaTarea.php" method ="POST">

  <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($codigoUrl); ?>">
  <label>Nombre de la tarea:</label><input type="text" name="nombreTarea"><br>
  <label>Fecha inicio:</label><input type="date" name="fechaI" ><br>
  <label>Fecha final:</label><input type="date" name="fechaF"><br>
  <label>Prioridad:</label> <input type="number" name="prioridad" min="1" max="3"><br>
  <label>Descripcion:</label><input type="text" name="descripcion"><br>
  <h4>*Todos los campos son oblligatorios</h4>
  <input type="submit" value="Enviar">

</form>



<form action="perfilUsuario.php">
<br>
<input type="submit" value="Volver">
</form>

</body>
</html>
