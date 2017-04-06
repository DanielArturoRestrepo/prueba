<?php

  header('Access-Control-Allow-Origin: *');

  $conexion = mysqli_connect('localhost', 'root' , '', 'emucril');

  mysqli_set_charset($conexion, 'utf8');

?>
