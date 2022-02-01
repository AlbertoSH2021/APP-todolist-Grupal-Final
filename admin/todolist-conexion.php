<?php
$conexion = new mysqli("localhost","root","","TodolistAlberto");
	
	if($conexion->connect_errno)
	{
		echo "No hay conexión: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
	}
?>