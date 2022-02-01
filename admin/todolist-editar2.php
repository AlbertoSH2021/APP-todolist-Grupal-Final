<?php 
include_once("todolist-conexion.php");
include_once("categoria-editartareas.php");

$codigo = $_GET['cod_alumno'];
 
$querybuscar = mysqli_query($conexion, "SELECT * FROM listaTareas WHERE cod_alumno=$codigo");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $codigo = $mostrar['cod_alumno'];
    $usuario = $mostrar['usuario'];
    $asunto = $mostrar['asunto'];
    $estado = $mostrar['estado'];
	//$descripcion = $mostrar['descripcion'];
}
?>

<html>
<head>    
		<title>Lista Tareas</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="caja_popup2" id="formmodificar">
  <form method="POST" class="contenedor_popup" >
        <table>
		<tr><th colspan="2">Editar Tarea</th></tr>
		     <tr> 
                <td>Codigo Alumno</td>
                <td><input type="text" name="txtcodigo" value="<?php echo $codigo;?>" required ></td>
            </tr>
            <tr> 
                <td>Usuario</td>
                <td><input type="text" name="txtusuario" value="<?php echo $usuario;?>" required></td>
            </tr>
            <tr> 
                <td>Asunto</td>
                <td><input type="text" name="txtasunto" value="<?php echo $asunto;?>" required></td>
            </tr>
            <tr> 
                <td>Estado</td>
                <td><input type="text" name="txtestado" value="<?php echo $estado;?>"required></td>
            </tr>
            <tr>
				
                <td colspan="2">
				<a href="categoria-editartareas.php">cancel</a>
				<input type="submit" name="btnmodificar" value="Editar" onClick="javascript: return confirm('guardar cambios');">
				</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
	
	if(isset($_POST['btnmodificar']))
{    
    $codigo1 = $_POST['txtcodigo'];
	
	$usuario1 	= $_POST['txtusuario'];
    $asunto1 	= $_POST['txtasunto'];
    $estado1 	= $_POST['txtestado'];
    
      
    $querymodificar = mysqli_query($conexion, "UPDATE listaTareas SET usuario='$usuario1',asunto='$asunto1',estado='$estado1' WHERE cod_alumno=$codigo1");

  	echo "<script>window.location= 'categoria-editartareas.php' </script>";
    
}
?>
	