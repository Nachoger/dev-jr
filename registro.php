﻿<!DOCTYPE HTML>
<html>
<html lang="en">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>

</head>

<body>
<p id"O">   

<?php

$id=$_POST['id'];
$nombre=$_POST['nombre'];  
$apellido=$_POST['apellido']; 
$email=$_POST['email']; 
$telefono=$_POST['telefono'];


include("configuracion.php");

 
$query="select * from Registro_Clientes where idcliente=".$id;

$result=mysql_query($query) or die("Error en la instruccion SQL");

if (mysql_num_rows($result) > 0) {
	echo"<br/><br/>";
	echo "El Usuario ya se encuentra registrado </br>";
	echo "<a href=../index.php>Volver</a>";

} else if (mysql_num_rows($result) == 0) {
  
$query="insert into Registro_Clientes(idcliente,nombre,apellido,email,telefono)
	values($id,'$nombre','$apellido','$email','$telefono')";
	$result=mysql_query($query) or die("Error ejecutar la instrucciÃ³n SQL ".mysql_error());
	
	echo"<br/><br/>";
	echo "El cliente fue registrado satisfactoriamente<br/>";
       	echo "<a href=../index.php>Volver</a>";
	mysql_close();          
        

}

?>
 

  </body>
</html>
