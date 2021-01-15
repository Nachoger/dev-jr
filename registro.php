﻿<!DOCTYPE HTML>
<html>
<html lang="en">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>

</head>

<body>
<p id"O">   

<?php

$codigo=$_POST['codigo'];
$nombres=$_POST['nombres'];  
$apellidos=$_POST['apellidos']; 
$correo=$_POST['correo']; 
$celular=$_POST['celular'];


include("configuracion.php");



//verificamos si el usuario ya se encuentra registrado 
$query="select * from registro_usuarios where codigousuario=".$codigo;

$result=mysql_query($query) or die("Error en la instruccion SQL");

if (mysql_num_rows($result) > 0) {
	echo"<br/><br/>";
	echo "El Usuario ya se encuentra registrado </br>";
	echo "<a href=../index.php>Volver</a>";

} else if (mysql_num_rows($result) == 0) {
//registramos el usuario al curso dfd
  
$query="insert into registro_usuarios(codigousuario,nombres,apellidos,correo,celular)
	values($codigo,'$nombres','$apellidos','$correo','$celular')";
	$result=mysql_query($query) or die("Error ejecutar la instrucciÃ³n SQL ".mysql_error());
	
	echo"<br/><br/>";
	echo "El estudiante fue registrado satisfactoriamente<br/>";
       	echo "<a href=../index.php>Volver</a>";
	mysql_close();          
        

}

?>
 <!-- javascript -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>

  </body>
</html>