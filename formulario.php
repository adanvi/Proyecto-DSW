<?php
  $conexion = mysqli_connect("localhost", "root", "", "formulario2") or die("Problemas con la conexión");
  mysqli_query($conexion,"INSERT INTO contacto(nombre,apellido,edad,sexo,ciudad,celular,comentarios) VALUES('$_REQUEST[nombre]','$_REQUEST[apellidos]','$_REQUEST[edad]','$_REQUEST[sexo]','$_REQUEST[ciudad]','$_REQUEST[celular]','$_REQUEST[comentarios]')")or die("Problemas con el select".mysqli_error($conexion));
  mysqli_close($conexion);
  echo"Gracias por dejar su comentario";
 ?>