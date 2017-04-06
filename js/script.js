
$(document).ready(function(){
  $('#enviar').attr('disabled','disabled');

  $('input').change(removeDisabled).keyup(removeDisabled);
});


// Manejador de evento para mostrar cálculo
$('#form').submit(function(e){

  e.preventDefault();

  $.ajax({

    type: 'POST',                              // Método

    url: 'calculos/calpintura.php',            // Archivo al que se envia

    data: $(this).serialize(),                 // Fin Datos

    success: function(response){               // Accion

      $('#display').html(response);

      }
    });
  });

// Resetear contenido
$('#borrar').click(function(e){

  e.preventDefault();

  $('#display').text('');

  $('#form input').val('');

  $('#form label').removeClass('error');

  $('#form input').removeClass('error');

  $('#enviar').attr('disabled','disabled');

});

// Funcion para quitar disabled
function removeDisabled(){

  var rellenos = true;

  // Para cada input
  $('#form input').each(function(){

    // Si su value esta vacio
    if ( ( $(this).val() == '' ) ) {
      rellenos = false;
      return false;     // Se sale de la comprobacion
    }
  });

  // Asigna la propiedad
  $('#enviar').prop('disabled', !rellenos);
}
