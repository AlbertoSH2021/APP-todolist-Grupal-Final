<?php
  require '../scripts/funciones.php';
  if(! haIniciadoSesion() )
  {
  	header('Location: index.html');
  }

  conectar();
  $categorias = getCategoriasPorUser();
  desconectar();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Panel de Usuario</title>
    <link rel="stylesheet" href="interfaz_userr.css">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

     <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
     <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
  </head>


  <body>
    <!--seccion messenger-->
      <div style="background-color: rgba(240, 230, 140, 0);"  style="margin-top: 20%;width: auto;z-index:10000;" >  		
        <iframe src="messenger/index.php" style="height: 630px;border-radius: 10px;width:30%;z-index:10000;" ></iframe> 
        <iframe src="usuario-panelprincipal.php" style="height: 630px;border-radius: 10px;width:69%;z-index:10000;" ></iframe>        
      </div> 
    <!--  fin-->
      <div class="menufijo">
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between navbar-fixed-top">
          <h2 class="p-8" style='color:white;'></h1>
          <a class="p-2 text-white" href="../uploadfile/categorias/tarea.php"> 
              <div class="col-2 d-flex justify-content-end align-items-center "> 
              <a type="button" class="btn btn-danger" href="mailto:alberto.andeanlodges@gmail.com">Enviar Correo @</a>
              <a type="button" class="btn btn-danger" href="../scripts/cerrar-sesion.php">cerrar sesion</a>
              <img src="utea.png" alt="" height=45 margin-top=-10>  
              <img src="uteasist.png" alt="" height=55 margin-top=-10> 
              </div>
          </a>
          <style> /*menu navegacion */ .navbar-fixed-top{
            background-color: rgba(82, 22, 43, 0.446);
            box-shadow: 0 0 3px 3px rgb(200, 0, 69);
            height: 55px;
            font-size: 40px;
            font-family: monospace; }body{background:rgba(0, 0, 0, 0.3);}
          </style>
        </nav>
       
      </div>
      </div>
  </body>
</html>
