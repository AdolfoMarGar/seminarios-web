$(document).ready(function() {
    $('#botonBusqueda').on('click', function() {
        var type = $('#type').val();
        var urlAjax = $(this).attr("urlAjax");
        var busqueda = $('#busquedatxt').val();

        peticionAjax(type, urlAjax, busqueda);
        
    });
    $('#busquedatxt').keydown(function(event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            var type = $('#type').val();
            var urlAjax = $('#botonBusqueda').attr("urlAjax");
            var busqueda = $('#busquedatxt').val();
    
            peticionAjax(type, urlAjax, busqueda);
        }
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
            crearLista(respuesta);

    
        },
        error: function(jqXHR, textStatus, errorThrown){
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        }
    });
}
function crearLista(respuesta) {
    var rutaActa = $('#botonBusqueda').attr("rutaActa")??null;

    $('#divLista').empty();
    respuesta.forEach(seminar => {
        rutaActa = rutaActa.replace("-1", seminar.id );

        $('#divLista').append('\
            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">\
                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">\
                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">\
                    '+seminar.year+'\
                    </div>\
                    <div class="job-content">\
                        <h5 class=" ">&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp<i class="zmdi zmdi-pin mr-2"></i> &nbsp &nbsp'+seminar.location+'</h5>\
                        <ul class="d-md-flex flex-wrap  ff-open-sans">\
                            <li class="mr-md-4">\
                                Organizado por '+seminar.hosts+'\
                            </li>\
                        </ul>\
                    </div>\
                </div>\
                <div class="job-right my-4 flex-shrink-0">\
                    <a class="btn second-color mx-3 text-nowrap" href="'+rutaActa+'">Libro de actas</a>\
                    <a class="btn second-color  mx-3 text-nowrap"  href="'+rutaActa+'">Libro de resumenes</a>\
                    <a class="btn second-color  mx-3 text-nowrap" href="'+rutaActa+'">Contenido audiovisual</a>\
                </div>\
            </div>\
        ');
        rutaActa = rutaActa.replace(seminar.id, "-1" );
            
    });
    
}