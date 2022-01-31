<?php 
  
 /* session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }*/

   // errores oculstos
 error_reporting(0);
?>

<?php include_once "header.php"; ?>
<body>

  <div class="wrapper">
    <section class="form signup">
      <header>Messenger Todolist.</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nombre</label>
            <input type="text" name="fname" placeholder="nombre" required>
          </div>
          <div class="field input">
            <label>Apellido</label>
            <input type="text" name="lname" placeholder="apellido" required>
          </div>
        </div>
        <div class="field input">
          <label>Correo Electronico</label>
          <input type="text" name="email" placeholder="ejemplo@auquiKunawa.com" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Seleccione Foto de Perfil</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Registrar">
        </div>
      </form>
      <div class="link">Estas Registrado? <br> <a href="login.php" style="color:red">Iniciar Sesion</a></div>
    </section>
  </div>




  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
