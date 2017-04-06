<?php

  header('Access-Control-Allow-Origin: *');

  $resultado = 0;

  // Si me envian estos campos, viene de calPintura
  if ( ( isset($_POST['superficie']) && isset($_POST['rendimiento']) && isset($_POST['manos']) ) ) {

    $superficie = $_POST['superficie'];
    $rendimiento = $_POST['rendimiento'];
    $manos = $_POST['manos'];

    if ( $superficie > 0 && $rendimiento > 0 && $manos > 0 ) {
      $resultado = ( $superficie * $manos ) / $rendimiento;
    }

    echo "<h4>Necesitas ".round($resultado)." litros de pintura.</h4>";
  }

  // Si me envian estos campos, viene de calPapel
  if ( ( isset($_POST['ancho']) && isset($_POST['alto']) ) ) {

    $ancho = $_POST['ancho'];
    $alto = $_POST['alto'];

    // Calcular el desperdicio
    $rapport = ( $ancho * $alto ) / 5;

    $resultado = ( ( $ancho / 0.53 ) * ( $alto + 0.40 ) + $rapport ) / 10;

    echo "<h4>Necesitas ". round($resultado)." rollos de papel pintado.</h4>";
  }

  // Si me envian estos campos, viene de calSuelo
  if ( ( isset($_POST['sancho']) && isset($_POST['salto']) ) ) {

    $ancho = $_POST['sancho'];
    $alto = $_POST['sancho'];

    $resultado = $ancho * $ $alto;

    echo "<h4>Necesitas ". round($resultado)." M2 de suelo laminado.</h4>";
  }


?>
