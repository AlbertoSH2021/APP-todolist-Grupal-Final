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
    
      <style>
        .navbar-fixed-top{
       background-color: rgba(53, 2, 20, 0.974);
       box-shadow: 0 0 3px 3px rgb(184, 136, 172);
       height: 55px;
       font-size: 40px;
       font-family: monospace;
       
      } 
      </style>
  </head>


<body>

    <div class="container">
       <!-- inicio -->
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <!--inicio click img  -->
                  <section class="gallery" id="galeria">
                    <div class="contenedor">
                        
                        <div class="contenedor-galeria">
                        
                            <img src="cronograma.jpg" class="img-galeria " alt="Hola">
                           <div class="agregar_foto"><input type="image" src="" alt=""><i class='bx bxs-camera-plus' type="file"></i></div> 
                          
                        </div>
                    </div>
                </section>
                <div class="imagen-light">
                      <i class='bx bxs-x-circle '></i>
                    <!-- <img src="img/close.svg" alt="" class="close"> -->
                    <img src="" alt="" class="agregar-imagen">
                </div>
            <!-- <a class="" href="#"><div class="div_perfil"><img class="perfil" src="img/img/1.jpg" alt=""></div></a> -->
            <!--fin  -->
            <!--  -->
            <style>
              
            </style>
            <!--  -->
        </div>
          <div class="col-4 text-center">
              <h1 class="display-8 font-italic "><i class='bx bx-user-circle'></i><?= $_SESSION['usuario'] ?>.</h1>
              <hr>
                Bienvenido. <br> Lista del Estudiante.
          </div>

        </div>
    </header>
      <!-- fin -->





      <div class="menufijo">
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between navbar-fixed-top">
         
        </nav>
      </div>
      </div>
 


      

   <!-- MODULOS -->
    <!--For each   para acceso a modulos -->
    <div class="col-lg-122" id="modulo">
          <fieldset>
        <legend><h1></h1></legend> 
           <h3><i class='bx bxs-user-check'></i> </i> <?= $_SESSION['usuario'] ?>. <strong> 
               <center> <h1 class="tituloop">MODULOS DE ACCESO</h1> </center></strong> </h3><hr>
          </fieldset>
        </div>
      <?php foreach( $categorias as $fila ): ?>
       <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12"> -->
    <footer class="wrapp">
      <div class="row-md-3">
        <div class="col-md-3 col-3 col-sm-3 col-md-3 col-lg-3 col-xl-2">
          <div class="card flex-md-row mb-6  box-shadow h-md250">
            <div class="card-body d-flex flex-column ">
              <!-- agregege la imagen desde CSS -->
            <div class="contenedor-galeria">         
            <img src="cronograma.jpg" class="img-galeria " alt="Hola">
            <div class="agregar_foto"><input type="image" src="" alt=""><i class='bx bxs-camera-plus' type="file"></i></div>
            </div><br>
              <center><a href="<?= $fila[2] ?>"><i class='bx bxs-checkbox'></i><?= $fila[0] ?></a></center>
             <!-- <center><a href="categorias/<?= $fila[2] ?>"><i class='bx bxs-checkbox'></i><?= $fila[0] ?></a></center> -->
              <center><div class="mb-1 text-muted"><i class='bx bx-street-view'></i><?= $_SESSION['usuario'] ?></div></center>
              <center> <p class="card-text mb-auto"><?= $fila[1] ?></p></center><br>
            </div>
            </div>
           
            </div>
        </div>
        <?php endforeach ?>
    </footer>
      </div>
    </div>
    <!--  -->

    <!-- footer  -->
    <div class="card text-center">
      <!-- activo link para enviar correo -->
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        
      </li> 
    </ul>
  </div>
    <footer class="footer">
  <div class="card-body ">
    
    <p class="card-text">Ingieneria de Software 2</p>
    <p class="parrafo">Univercidad Tecnologica de los Andes sede-Cusco Peru.</p> <style>.parrafo{text-align: center;}</style>
    <div class="container">
            <div class="row row-icon ">
              <!--  -->
                <div class="col-12 col-sm-10 col-md-6 col-lg-6 col-xl-12">
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3"><h4> <img src="utea.png" alt="" class="imagen_footer"></h4> </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3"><h4> <img src="utea.png" alt="" class="imagen_footer"></h4> </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3"><h4> <img src="utea.png" alt="" class="imagen_footer"></h4> </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">  <p class="parrafo">Alberto Sanchez Huaman</h1> </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">  <p class="parrafo">Manuel Efrain Ramirez Ayme</h1> </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">  <p class="parrafo">Jose Luis Sanchez Avalos</h1></div>
                </div>
                <!--redes sociales  -->
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <div class="social-media">
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><a href="" class="social-media-icon"><i class='bx bxl-facebook-circle icono-legal' ></a></i> </div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12"><a href="" class="social-media-icon"><i class='bx bxl-instagram icono-legal' ></i></a> </div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12"><a href="" class="social-media-icon"><i class='bx bxl-youtube icono-legal'></i></a></div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12"><a href="" class="social-media-icon"><i class='bx bxl-twitter icono-legal' ></i></a></div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12"><a href="" class="social-media-icon"><i class='bx bxl-discord icono-legal' ></i></a></div>
                    </div>
                </div> 
                <!-- informacion contactos -->
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3"><h4> Informacion Contactanos </h4> 
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3"><h4>Docente: EDUARDO CHAVEZ VASQUEZ </h4> 
                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12"> alberto.andeanlodges@gmail.com</div>                  
                </div>
                
             </div>
    </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 fin1">© 2021 Todos los Derechos Reservados | Alberto Sanchez </div>
        </footer>

    </div>

    <script src="js/click.js"></script>
</body>
</html>
