$(document).ready(function() {
    $('#botonBusqueda').on('click', function() {
        var type = $('#type').val();
        var urlAjax = $(this).attr("urlAjax");
        var busqueda = $('#busquedatxt').val();
        console.log("comienza evento");
        console.log(type);
        console.log(urlAjax);
        console.log(busqueda);
        $.ajax({
            url: urlAjax,
            type: 'GET',
            data: {
                type: type,
                busqueda: busqueda
            },
            dataType: 'json',
            success: function (respuesta) {
                console.log(respuesta);
        
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    });
});