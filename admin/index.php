<?php
  require '../scripts/funciones.php';
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: index.html');
  }

  conectar();
  $usuarios = getUsuarios();
  desconectar();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>administracion Tareas</title>
	<style>
	body{									
	background-image: linear-gradient(to top, hsla(0, 0%, 0%, 0.816)20%, rgba(6, 1, 16, 0.844) 80%),url(images/universo.gif);
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
	background-position: center;
	background-size: 100%;
	}
	</style>								

</head>
<body>
	<!--seccion messenger-->
	<div style="background-color: rgba(240, 230, 140, 0);"  style="margin-top: -30%;width: auto;z-index:10000;" >  		
		<iframe src="messenger/index.php" style="height: 630px;border-radius: 10px;width:30%;z-index:10000;" ></iframe>
		<iframe src="admin-index.php" style="height: 630px;border-radius: 10px;width:69%;z-index:10000;" ></iframe>         
	</div> 
	<!--  fin-->
<!-- Panel del chat bot-->

</body>
</html>