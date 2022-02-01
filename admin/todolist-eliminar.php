<?php
include_once("todolist-conexion.php");
 
$codigo = $_GET['cod_alumno'];
 
mysqli_query($conexion, "DELETE FROM listaTareas WHERE cod_alumno=$codigo");
 
header("Location:categoria-listadetareas.php");

?>