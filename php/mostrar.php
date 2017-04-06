<?php

  include 'conexion.php';

  $datos = array();

  $sql = 'select * from familia;';
  $result = mysqli_query($conexion,$sql);

  if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_object($result)) {
      $datos[] = $row;
    }

    echo json_encode($datos);

  } else {
    echo "<li>No hay categorias.</li>";
  }

?>
