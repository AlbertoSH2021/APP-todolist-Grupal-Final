<?php
include_once("todolist-conexion.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>todolist</title>
	<style>
			
			.wrap{		
			box-shadow: 0 0 8px rgba(0, 0, 0, 0.974);
			border-radius: 10px;
			margin: auto; 
			height:200px;
			background-color:rgba(53, 2, 20, 0.974);
			color: rgb(255, 255, 255);
			text-align: center;
			}
			th 
			{		
				background: rgba(53, 2, 20, 0.974);
				height: 30px;
				color: rgb(255, 255, 255);
				border: 1px solid rgba(53, 2, 20, 0.974);	
				font-size: 15px;
				box-shadow:0 0 16px rgb(5, 5, 5);
			}
			th.gestionar{width:30%;}
			table,td
			{
				background-color:white;
				font-size: 12px;
				border:solid rgba(0, 0, 0, 0.2);
			}
			table
			{
				width: 100%;
			}
			input.agregar{
				margin-left:80%;
				margin-top:-50px;
			}
			a,input,button
			{
				
				font-size: 14px;
				width: 100px;
				display: inline-block;			
				padding: 6px 10px;
				border-radius:5px;
				text-decoration: none;
				color:rgb(240, 240, 240);
				background-color:#10275e;	
				border:3px solid rgb(255, 255, 255);
				cursor:pointer;
				box-shadow: 0 0 10px rgb(0, 0, 0);
			}
			input:hover
			{	
				background-color:#053dcc;	
				border:4px solid rgb(255, 255, 255);
				cursor:pointer;
				box-shadow: 0 0 11px rgb(250, 247, 33);
			}
			button:hover
			{
				background-color:#053dcc;	
				border:4px solid rgb(255, 255, 255);
				cursor:pointer;
				box-shadow: 0 0 11px rgb(250, 247, 33);
			}
			a{text-align: center;}
			
			a:hover
			{
				background-color:#053dcc;	
				border:4px solid rgb(255, 255, 255);
				cursor:pointer;
				box-shadow: 0 0 11px rgb(250, 247, 33);
			}
			
			

			.caja_popup 
			{
				display: none;
				position: absolute;
				padding:0;
				background-color:rgba(255, 255, 255, 0.5);
				width:100%;
				height:100%;
			}
			.contenedor_popup 
			{
				border-radius: 5px;
				top:-50%;
				left: 70%;
				position: absolute;
				transform: translate(-50%,-50%);
				width:400px;
				border-radius: 5px;
				transition: all 0.2s;
			}
		
			.caja_popup2 
			{
				display: block;
				position: absolute;
				padding:0;
				background-color:rgba(102, 101, 101, 0.5);
				width:100%;
				height:100%;
			}
			#cajabuscar
			{
				width:300px;
				color: black;
				height:15px;
				font-size:15px;
				background-color:#f8f8f8;	
				border:4px solid rgb(197, 194, 194);
				cursor:pointer;
				box-shadow: 0 0 8px rgb(250, 247, 33);
				margin: 0px 120px;
			}
	</style>

</head>
<body>

	<div class="wrap icon" style="width: 100%;"> 
			<br><br><h1>LISTA DE TAREAS</h1>
			<div id="barrabuscar">
				<form method="POST" >
					<input type="submit" value="Buscar" name="btnbuscar">
					<input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;">				
				</form>
			</div><input onclick="abrirform()" type="submit" value="Agregar+" class="agregar">		
	</div>
	<!--tabla-->
  <table>
    <tr>
    	<th>#</th>	<th>Tarea</th> <th>Descripcion de Tarea</th> <th>Estado</th> <th class='gestionar'>Gestionar</th>
    </tr>
	<?php 

		if(isset($_POST['btnbuscar']))
		{
			$buscar = $_POST['txtbuscar'];
			$queryusuarios = mysqli_query($conexion, "SELECT cod_alumno,usuario,asunto,estado FROM listaTareas where usuario like '".$buscar."%'");
		}
		else
		{
			$queryusuarios = mysqli_query($conexion, "SELECT * FROM listaTareas ORDER BY cod_alumno asc");
		}
			$numerofila = 0;
			while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;    
			echo "<tr>";
			echo "<td>".$numerofila."</td>";
			echo "<td>".$mostrar['usuario']."</td>";
			echo "<td>".$mostrar['asunto']."</td>";  
			echo "<td>".$mostrar['estado']."</td>";   
			echo "<td style='width:26%'><a href=\"todolist-editar.php?cod_alumno=$mostrar[cod_alumno]\">Editar</a>  <a href=\"todolist-eliminar.php?cod_alumno=$mostrar[cod_alumno]\" onClick=\"return confirm('¿ Eliminar tarea $mostrar[usuario]?')\">Eliminar</a></td>";           
		}
	?>
  </table>

	<script>
		function abrirform() {document.getElementById("formregistrar").style.display = "block";}
		function cancelarform() {document.getElementById("formregistrar").style.display = "none";}
	</script>

	<div class="caja_popup" id="formregistrar">
		<form action="todolist-agregar.php" class="contenedor_popup" method="POST">
			<table>
				<tr><th colspan="2">Agregar Tarea</th></tr>
				<tr> 
					<td>Tarea</td>
					<td><input type="text" name="txtusuario" required></td>
				</tr>
				<tr> 
					<td>Descripcion</td>
					<td><input type="text" name="txtasunto" required></td>
				</tr>
				<tr> 
					<td>Estado</td>
					<td><input type="text" name="txtestado" required></td>
				</tr>
				
				<tr> 	
				<td colspan="2">
					<button type="button" onclick="cancelarform()">Cancelar</button>
					<input type="submit" name="btnregistrar" value="Guardar" onClick="javascript: return confirm('guardar tarea');">
				</td>
				</tr>
			</table>
		</form>
	</div>


	<script type="text/javascript">
		portfolioList = document.querySelectorAll('.portfolio-box');
		portfolioList.forEach(function(portfolioPic) {
			portfolioPic.addEventListener('click',function(){
				bg = this.style.backgroundImage;
				document.getElementById('port_pop_pic_bg').classList.add("active")
				document.getElementById('port_pop_pic').style.backgroundImage = bg
				document.getElementById('port_pop_pic').classList.add("active")
			});	
		})
		document.getElementById('port_pop_pic_bg').addEventListener('click',function(){
				document.getElementById('port_pop_pic_bg').classList.remove("active")
				document.getElementById('port_pop_pic').classList.remove("active")
		})
	</script>

</body>
</html>