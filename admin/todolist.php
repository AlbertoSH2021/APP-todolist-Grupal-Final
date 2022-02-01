<?php
include_once("todolist-conexion.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>todolist</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	
<!-- Estilo para texto en movimiento -->
<link rel="stylesheet" type="text/css" href="css/css texto movimiento/textoMovimiento.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
<!-- fin -->
<!-- LINK ICONOS EN MOVIMIENTO -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">



	<style>
		

		.wrap{
	    max-width: 1100px;
     	width:100%;
		 height: 150px;
	     box-shadow: 0 0 6px rgba(197, 197, 36, 0.466);
		border-radius: 10px;
	     margin: auto;
     	background-color: #00000021;
       }


						
		
			#title-1 {
			text-align: center;
			color: rgb(245, 128, 19);
			font-family: 'Roboto', sans-serif;
			font-size: 100px; 
			top: -10px;
			letter-spacing: 20px;
			line-height: 50px;
			font-style: normal;
			font-weight: 100;
			margin-left: 100px;
			}
			
	</style>
<style>

		body{
		font-family: sans-serif;
		margin:0;
		padding:0;
		/*height: 100%;*/
   		 width: 90%;						
		background-image: linear-gradient(to top, hsla(46, 100%, 91%, 0.933) 0%, rgba(250, 230, 230, 0.912) 100%),url(images/universo.gif);
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;
		background-position: center;
		background-size: 100%;
										
								
		}
		table
		{
			margin-left: 60px;
			text-align:center;
			width: 100%;
			border-collapse: collapse;
			
			background: rgb(255, 254, 254);
		}
		th 
		{
			letter-spacing: 5px;

			background: rgb(0, 0, 0);
			height: 40px;
			font-weight: lighter;
			text-shadow: 0 1px 0 #edfa3b;
			color: rgb(243, 201, 17);
			border: 1px solid #030303;
			transition: all 0.2s;
			font-size: 18px;
			box-shadow:0 0 16px rgba(228, 177, 8, 0.5);

		}
		tr 
		{
		
			width:100%;
		}
		td 
		{
			border: 1px solid #ffee00a1;
			padding: 10px;
			transition: all 0.2s;
			font-size: 12px;
		}
		a,input,button
		{
			font-size: 14px;
			
			width: 100px;
			display: inline-block;
			background-color:#000000;
			padding: 6px 10px;
			border-radius:10px;
			text-decoration: none;
			color:rgb(253, 228, 0);
			border:1px solid rgb(218, 161, 7);
			cursor:pointer;
			box-shadow: 0 0 8px rgb(245, 245, 245);
		}
		input:hover
		{
			font-size: 16px;
			background-color:#f3a513b7;
			color:rgb(0, 0, 0);
			border:1px solid rgb(218, 161, 6);
			cursor:pointer;
			box-shadow: 0 0 10px rgb(255, 251, 0);
		}
		button:hover
		{
			font-size: 16px;
			background-color:#f3a513b7;
			color:rgb(0, 0, 0);
			border:1px solid rgb(218, 161, 6);
			cursor:pointer;
			box-shadow: 0 0 10px rgb(255, 251, 0);
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
		#barrabuscar
		{
			color:white;
			text-align:right;
		}
		#cajabuscar
		{
			width:500px;
			height:20px;
			font-size:18px;
			background-color:#f3f3f3;
			border-color:white;
			padding-left:10px;
			margin: 0px 30px;
		}
</style>
</head>
<body>

<h1 id="title-1" >
	
	

	<div class="wrap icon" style="width: 70%;"> 
		<h1>LISTA DE ssss TAREAS</h1>
	
        <div id="barrabuscar">
        <form method="POST" >
        <input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;">
       <br> 
		</form>
</div>
	</div>
	<a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">
		<input type="submit" value="Agregar+" name=""></a>
</h1>
<!--  -->

	<!-- <em><span></span ></em>    class="fa-spin"   class="fa-spin-reverse" -->
		  
		
    <table>
	
 
    <tr></tr>
    <tr>
    <th>Codigo</th>
   <th>Tarea</th>
    <th>Descripcion de Tarea</th>
    <th>Estado</th>
    <th>Gestionar</th>
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
function abrirform() {
document.getElementById("formregistrar").style.display = "block";

}

function cancelarform() {
document.getElementById("formregistrar").style.display = "none";
}

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