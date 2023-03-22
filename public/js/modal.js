$(document).ready(function() {

    var id_boton;
    $('form.botonBorrar').submit(function(event) {
        event.preventDefault();
        id_boton= '#'+this.id;


        console.log(id_boton);

        $('#modal').show();
        });
    
      $('#confirmar').click(function() {
        $(id_boton).unbind('submit').submit();
      });
    
      $('#cancelar').click(function() {
        $('#modal').hide();
      });
  });