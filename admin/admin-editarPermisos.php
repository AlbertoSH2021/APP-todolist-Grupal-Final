<?php
  require '../scripts/funciones.php';
  // Validación de la sesión como administrador:
  if(! haIniciadoSesion() || ! esAdmin() )
  {
    header('Location: index.html');
  }
  // Verificación del parámetro GET:
  if( isset($_GET['usuario']) )
    $usuario = $_GET['usuario'];
  else header('Location: index.php');
  // Captura de las categorías:
  conectar();
  $categorias = getTodasCategorias();
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
    <link rel="stylesheet" href="css/intranetinterfaz.css">
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    

    <div class="container-fluid">
      <div class="row">
        <?php include 'admin-menu-lateral.php'; ?>
        <div class="col-sm-8 col-sm-offset-0 col-md-8 col-md-offset-0 main">
          <h1 class="page-header">Panel de Administración</h1>

          <h4 class="sub-header">Modificando permisos de acceso</h4>
          <p>Se están modificando los permisos para el usuario:</p> 

          <div class="row">
            <div class="col-sm-12 col-sm-offset-0">
            
            <div class="panel panel-default">
              <div class="panel-heading"><h3 class="panel-title">Edición de permisos</h3></div>
              <div class="panel-body">
                <form action="../scripts/actualizar-permisos.php" method="POST">
                  <div class="form-group">
                    <label for="txtUsuario">Usuario</label>
                    <input type="text" class="form-control" name="txtUsuario" id="txtUsuario" value="<?= $usuario ?>" readonly>
                  </div>
        <?php foreach( $categorias as $categoria ): ?>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="categoria<?= $categoria[0] ?>" <?php if(tienePermiso($usuario, $categoria[0])) echo "checked" ?>> <?= $categoria[1] ?>
                    </label>                                          
                  </div>
                  
        <?php 
        	endforeach; 
        	desconectar();
        ?>
              <button type="submit" class="btn btn-default" ><a href="Permisos.php"> Guardar </a> </button>
                
                </form>
              </div>
            </div>
          </div>
            
        </div>

        </div>
      </div>
    </div>
     <!-- butones ash -->
     <section id="figura">
                <div class="rectangulo"></div>
                </section>
                <style>
                    body{
                background: rgba(232, 235, 226, 0.568);
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                flex-direction: column;
                }
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
                <button type="radius" class="button_refresh0"><a href="insertarusuarios.php" class="back-button"><a href="../index.html"><i class='bx bx-power-off'></i></a></li> </a></button>
                
            <!-- <li><a href="../scripts/cerrar-sesion.php">Cerrar sesión</a></li>  -->
            <!-- <li><a href="scripts/cerrar-sesion.php">Cerrar sesión</a></li> -->
                </nav>
        <!-- fin botones ash -->



    <style>
          body{
                background: rgba(232, 235, 226, 0.568);
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                flex-direction: column;
     }
    body{
                    height: 100vh;
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
  }
  .container-fluid{
    background-color: rgba(0, 0, 0, 0.527);
    border-radius: 20px;
}
.table-striped{
    color: black;
    background-color: rgba(95, 158, 160, 0.63);
}
.panel-default{
  color: black;
}
</style>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </body>
</html>
