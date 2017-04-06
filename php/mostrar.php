<?php

  include 'conexion.php';

  $datos = array();

  $sql = 'select nombre from familia;';
  $result = mysqli_query($conexion,$sql);

  if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
      $datos[] = $row['nombre'];
    }

    echo json_encode($datos);

  } else {
    echo "<li>No hay categorias.</li>";
  }

?>
