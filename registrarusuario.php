<?php
  $conexion=mysqli_connect("localhost","root","","bdkonect") or
              die("Problemas de conexión a la bd");

  mysqli_query(
      $conexion,"insert into tusuarios(usuario,password,tipo) values 
      ('$_REQUEST[usuario]','$_REQUEST[password]','1')")
               or die("Problemas en el registro ");

  mysqli_close($conexion);
  echo("Usuario registrado exitosamente");
?>