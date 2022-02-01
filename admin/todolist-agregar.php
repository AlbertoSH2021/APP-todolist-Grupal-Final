<?php include_once("todolist-conexion.php"); 
    
    $usuario	= $_POST['txtusuario'];
    $asunto 	= $_POST['txtasunto'];
    $estado	= $_POST['txtestado'];
    $descripcion 	= $_POST['txtdescripcion'];
    
	mysqli_query($conexion, "INSERT INTO listaTareas(usuario,asunto,estado) VALUES('$usuario','$asunto','$estado')");
    
header("Location:categoria-listadetareas.php");
	

?>