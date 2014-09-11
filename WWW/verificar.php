<?php

//se conecta
include_once("includes/database.php");

//toma las variables arrojadas del index.php
$correo = $_POST['correo'];
$contrasena = $_POST['password'];

//si las variables no estan vacias
if(isset($correo) && !empty ($correo) && isset($contrasena) && !empty ($contrasena))
{  

//query descrito en word
 $query = "SELECT taller1.usuario.Correo, taller1.usuario.Contrasena FROM taller1.usuario WHERE `Correo`= '$correo'";
 
 $result = mysqli_query($con,$query);

 //se recorre el arreglo con la informacion que arroja el query
 while($row = mysqli_fetch_array($result)){

//si la contraseña es igual a la dada en el registro entonces va a la siguiente pagina sino permanece en el login
  if($contrasena == $row['Contrasena']){
    header('Location: perfilUsuario.php');
  } else{
   header('Location: index.php');
   }
 }
}
else{
	header('Location: index.php');
}

?>