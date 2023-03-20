$(document).ready(function() {
    $('#botonBusqueda').on('click', function() {
        var type = $('#type').val();
        var urlAjax = $(this).attr("urlAjax");
        var busqueda = $('#busquedatxt').val();

        peticionAjax(type, urlAjax, busqueda);
        
    });
});

function peticionAjax(type, urlAjax, busqueda) {
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
            crearLista(respuesta.response, respuesta.yearList);
        },
        error: function(jqXHR, textStatus, errorThrown){
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        }
    });
}
function crearLista(response, yearList) {
    $('#divLista').empty();

    var rutaActa = $('#botonBusqueda').attr("rutaActa")??null;
    response.forEach(pre => {
        console.log();
        for (let i = 0; i < yearList.length; i++) {
            divId= '#seminar_id'+yearList[i].id
            console.log(divId);
            if ($(divId).length==0&&pre.seminar_id==yearList[i].id) {
                $('#divLista').append('\
                    <h2 class="text-left mx-auto" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+yearList[i].location+
                    ', '+yearList[i].year+'</h2><div id="seminar_id'+yearList[i].id+'"></div>\
                ');
            }
            if (pre.seminar_id==yearList[i].id) {
                rutaActa = rutaActa.replace("-1", pre.id );
                $('#divLista').append('\
                    <div class="job-box d-md-flex align-items-center justify-content-between mb-30">\
                        <div class="job-left my-4 d-md-flex align-items-center flex-wrap">\
                            <div class="job-content">\
                                <h5 class=" ">&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp<i class="zmdi zmdi-flower-alt"></i></i> &nbsp &nbsp'+pre.subject+'</h5>\
                                <p>\
                                    &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp'+pre.title+
                                '</p>\
                                <p>\
                                    &nbsp &nbsp&nbsp &nbsp &nbsp&nbspPalbras clave: '+pre.keywords+
                                '</p>\
                            </div>\
                        </div>\
                        <div class="job-right my-4 flex-shrink-0">\
                            <a class="btn  mx-3 text-nowrap third-color" href="'+rutaActa+'">Resumen</a>\
                            <a class="btn  mx-3 text-nowrap third-color" href="'+rutaActa+'">Presentación</a>\
                            <a class="btn  mx-3 text-nowrap third-color"  href="'+rutaActa+'">Archivos relacionados</a>\
                        </div>\
                    </div>\
                ');
                rutaActa = rutaActa.replace(pre.id, "-1" );

            }
        }

    });

/*
    
    response.forEach(pre => {
        console.log(pre);
        rutaActa = rutaActa.replace("-1", pre.id );
        console.log('#seminar_id'+pre.seminar_id+'');

        $('#seminar_id'+pre.seminar_id+'').append('<h1>prueba</h1>');
        rutaActa = rutaActa.replace(pre.id, "-1" );
            
    });
    */
}