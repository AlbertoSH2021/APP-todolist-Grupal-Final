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
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de Administración</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>

  <body >
  <?php include './admin-menu-lateral.php'; ?>

    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-8 col-sm-offset-0 col-md-8 col-md-offset-0 main">
          <h1 class="page-header" >ADMINISTRACION DEL SISTEMA <br> ANDEAN LODGES</h1>

          <h4 class="sub-header">Bienvenido,<strong><?= $_SESSION['usuario'] ?></strong> .</h4>
          <p>SELECCIONE UNA DE LAS OPCIONES.</p>
        </div>
      </div>
    </div>



    <!-- butones ash -->
 <section id="figura">
                <div class="rectangulo"></div>
                </section>
                <style>
              
                .button_atras{
                    color: rgba(244, 241, 246, 0.808);
                    text-decoration: none;
                    font-size: 1.3rem;
                    font-weight: bold;
                    position: fixed;
                    z-index: 10;
                    top: 30px;
                    right: 30px;
                    background:rgb(236, 236, 236) ;
                    height: 40px;
                    width: 40px;
                    cursor: pointer;
                    border-radius: 10px;
                    box-shadow: 0 0 6px rgba(0,0,0,1);
                    
                }
                .button_refresh{
                    color: rgba(241, 246, 241, 0.808);
                    text-decoration: none;
                    font-size: 1.3rem;
                    font-weight: bold;
                    position: fixed;
                    z-index: 10;
                    top: 30px;
                    right: 90px;
                    background:rgb(236, 236, 236) ;
                    height: 40px;
                    width: 40px;
                    cursor: pointer;
                    border-radius: 10px;
                    box-shadow: 0 0 6px rgba(0,0,0,1);
                    
                }
                .button_refresh0{
                    color: rgba(241, 246, 241, 0.808);
                    text-decoration: none;
                    font-size: 1.3rem;
                    font-weight: bold;
                    position: fixed;
                    z-index: 10;
                    top: 30px;
                    right: 150px;
                    background:rgb(236, 236, 236) ;
                    height: 40px;
                    width: 40px;
                    cursor: pointer;
                    border-radius: 10px;
                    box-shadow: 0 0 6px rgba(0,0,0,1);
                    
                }
                </style>
                
                    
                <button type="radius" class="button_atras"><a href="index.php" class="back-button"><i class='bx bx-arrow-back'></i></a></button>
                <button type="radius" class="button_refresh"><a href="insertarusuarios.php" class="back-button"><i class='bx bx-refresh'></i></i></a></button>
                <button type="radius" class="button_refresh0"><a href="insertarusuarios.php" class="back-button"><a href="/index.html"><i class='bx bx-power-off'></i></a></li> </a></button>
                
            <!-- <li><a href="../scripts/cerrar-sesion.php">Cerrar sesión</a></li>  -->
            <!-- <li><a href="scripts/cerrar-sesion.php">Cerrar sesión</a></li> -->
                </nav>
        <!-- fin botones ash -->
    <!-- Bootstrap core JavaScript
    
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <style> 
    
    body{
                   
                    background-image: linear-gradient(to top, hsla(66, 83%, 9%, 0.582) 0%, rgba(175, 145, 63, 0.596) 100%),url(gift.gif);
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-attachment: fixed;
                    background-position: center;
                    color: White;
                    font-size:150%;
                    font-weight: bold;
                    }
                    .sidebar{
   background-color:  rgba(255, 255, 255, 0.541);
  }</style>
  </body>
</html>
