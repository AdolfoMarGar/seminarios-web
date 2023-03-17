$(document).ready(function() {
    $('#selectAjax').on('change', function() {
        var id = $(this).val();
        var urlAjax = $(this).attr("urlAjax");
        $.ajax({
            url: urlAjax,
            type: 'GET',
            data: {
                seminar_id: id
            },
            dataType: 'json',
            success: function (respuesta) {
                $('#selectRecargar').html(
                    '<select class="form-select first-color" id="selectRecargar" aria-label="Default select example" name="presentation_id">\
                        <option id="valueNull"value="{{null}}">Ninguno</option>'+
                    "</select>"

                );
                respuesta.forEach(ponencia => {
                    $('#valueNull').after('<option value="'+ponencia.id+'">'+ponencia.subject+'</option>');

                           
                });
        
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    });
});