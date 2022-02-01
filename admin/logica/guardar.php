<?php
 require 'conexion.php';
  
 $nombre  = $_POST['usuario'];
 $apellido  = $_POST['clave'];
 $email = $_POST['admin'];

$insertar = "INSERT INTO usuarios VALUES ('$nombre','$apellido','$email') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('Registro Satisfactorio');
    location.href = '../InsertarUsuarios.php';
   </script>";

}else{
    echo "<script> alert('Los datos ingresados son erroneos o Usuario Existente');
    location.href = '../InsertarUsuarios.php';
    </script> ";
}


?>
