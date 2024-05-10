<?php 

	session_start();
	if(!isset($_SESSION["perfil"])){header('Location: salir.php');}
	
	include "modelos/api.php";
	include "modelos/bbdd/perfil.php";
	
	$ficha = $_GET["num_ficha"];
	$data_convertido = datos_recurso($ficha);
	
	include "vistas/ficha.htm"; 

?>