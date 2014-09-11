<!DOCTYPE html>

<html>
<head> 
<title> Crear usuario </title>
<meta charset = "utf-8">
</head>

<body>

<?php

//se conecta
include_once("includes/database.php");

?>

<form action="AgregarUsuario.php" method ="POST">

   <label>Nombre:</label><input type="text" name="nombre" value"" ><br>
   <label>Apellido:</label><input type="text" name="apellido" value"" ><br>
   <label>Correo:</label><input type="text" name="correo" value"" ><br>
   <label>Contrasena:</label><input type="text" name="contrasena" value""><br>
   <h4>*Todos los campos son oblligatorios</h4>
   <input type="submit" name="Enviar" value="Enviar" >

</form>
</body>

</html>