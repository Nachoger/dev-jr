﻿<?php 

//Datos del servidor y base de datos 

$server="localhost3306"; 
$username="root"; 
$password= "admin1234"; 
$database_name="Pagina_Web";
//Establecemos la conexión con el servidor 
$conexion=mysql_connect($server, $username, $password) 
or die("Problemas al tratar de establecer la conexion"); 
//Seleccionamos la base de datos 
$bd_sel=mysql_select_db($database_name) or die("Problemas al seleccionar la base de datos"); 
?>


