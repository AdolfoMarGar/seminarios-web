$(document).ready(function() {

    $('form.botonBorrar').submit(function(event) {
        event.preventDefault();

        $('#modal').show();
      });
    
      $('#confirmar').click(function() {
        $('form.botonBorrar').unbind('submit').submit();
      });
    
      $('#cancelar').click(function() {
        $('#modal').hide();
      });
  });