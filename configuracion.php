﻿<?php 



$server="localhost3306"; 
$username="root"; 
$password= "admin1234"; 
$database_name="Pagina_Web";
$conexion=mysql_connect($server, $username, $password) 
or die("Problemas al tratar de establecer la conexion"); 
$bd_sel=mysql_select_db($database_name) or die("Problemas al seleccionar la base de datos"); 
?>


