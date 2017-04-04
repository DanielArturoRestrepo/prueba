<?php

  $resultado = 0;

  if (isset($_POST['superficie'])) {

    $superficie = $_POST['superficie'];
    $rendimiento = $_POST['rendimiento'];
    $manos = $_POST['manos'];

    if ( $superficie > 0 && $rendimiento > 0 && $manos > 0 ) {
      $resultado = ( $superficie * $manos ) / $rendimiento;
    }

    echo "<h4>Necesitas ".round($resultado)." litros de pintura.</h4>";
  }


?>
