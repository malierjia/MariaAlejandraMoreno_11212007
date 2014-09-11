<!DOCTYPE html>

<html>
<head>
	<title>Taller 1</title>
	<meta charset = "utf-8">

</head>
<body>

<?php
//se conecta
include_once("includes/database.php");

?>

<h1> Bienvenidos </h1>

<form action="verificar.php" method ="POST">
   <label>Correo:</label><input type="email" name="correo" value"" ><br>
   <label>Contraseña:</label><input type="password" name="password" value"" ><br>
   <input type="submit" name "LOG IN" value ="Log in" >
</form>
<button type="button"><a href="usuarios.php">Registrar</a></button>

</body>
</html>



