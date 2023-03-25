$(document).ready(function() {

    var id_boton;

    $('form.botonBorrar').submit(function(event) {
        event.preventDefault();
        id_boton= '#'+this.id;
        var id_ajax = this.id;
        var urlAjax = $('table').attr("urlAjax");
        id_ajax = id_ajax.replace("botonBorrar", "");

        $.ajax({
            url: urlAjax,
            type: 'GET',
            data: {
                seminar_id: id_ajax
            },
            dataType: 'json',
            success: function (respuesta) {
                if(respuesta.borrar){
                    borrar();
                }else{
                    aviso();
                }
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
            
        });
    
        function borrar() {
            $('#modal').show();
            
        }
        function aviso(){
            $('#aviso').show();

        }


        $('#entiendo').click(function() {
            $('#aviso').hide();
          });
    
        $('#cancelar').click(function() {
            $('#modal').hide();
        });
        $('#confirmar').click(function() {
            $(id_boton).unbind('submit').submit();
        });
  });