
@extends("layouts.mainLayout")

@section("title", "Inserción de seminarios")

@section("header", "Inserción de seminarios")

@section("content")
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Nueva petición</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-9 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 third-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>     
                             <table class="table table-bordered table-striped myBorderColor">
                                @isset($myrequest)
                                    <form action="{{ route('request.update', ['request' => $myrequest->id]) }}" method="POST" enctype="multipart/form-data">
                                    @method("PUT")
                                @else
                                    <form action="{{ route('request.store') }}" method="POST" enctype="multipart/form-data">
                                @endisset
                                    @csrf
                                    <tr>
                                        <th scope="col">Información sobre la petición:</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="form-control first-color" name="text" rows="3" >{{$myrequest->text ?? '' }}</textarea>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="col">Tipo de archivo:</th>
                                        <td>
                                            <select class="form-select first-color" aria-label="Default select example" name="type">
                                                @isset($myrequest)

                                                    <option  
                                                        @if($myrequest->type==1)
                                                                selected 
                                                        @endif 
                                                    value="1">PDF</option>
                                                    <option  
                                                        @if($myrequest->type==2)
                                                                selected 
                                                        @endif 
                                                    value="2">Presentación</option>
                                                    <option  
                                                        @if($myrequest->type==3)
                                                                selected 
                                                        @endif 
                                                    value="3">Fotografía</option>

                                                @else        
                                                    <option value="1">PDF</option>
                                                    <option value="2">Presentación</option>
                                                    <option value="3">Fotografía</option>

                                                @endisset
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Seminario:</th>
                                        <td>
                                            <select class="form-select first-color" id="selectAjax" aria-label="Default select example" name="seminar_id">
                                                @foreach($seminarList as $s)
                                                    <option  
                                                    @isset($myrequest)
                                                        @if ($myrequest->document->seminar_id==$s->id)
                                                            selected 
                                                        @endif 
                                                    @endisset
                                                    
                                                    value="{{$s->id}}">{{$s->year}}, {{$s->location}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="col">Ponencia:</th>
                                        <td>
                                            <select class="form-select first-color"  aria-label="Default select example" name="presentation_id">
                                                <option value="{{null}}">Ninguno</option>
                                                @foreach($presentationList as $s)
                                                    <option  
                                                    @isset($myrequest)
                                                        @if ($myrequest->document->presentation_id==$s->id)
                                                            selected 
                                                        @endif 
                                                    @endisset
                                                    
                                                    value="{{$s->id}}">{{$s->subject}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        @isset($myrequest)
                                            <th scope="col"><label for="chooseFile" class="form-label">Nuevo Documento:</label></th>

                                        @else
                                            <th scope="col"><label for="chooseFile" class="form-label">Documento:</label></th>

                                        @endisset
                                        <td>
                                            <input class="form-control first-color" type="file" id="chooseFile" name="file">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="col" colspan="2">
                                            <input  class="btn second-color" type="submit">

                                        </td>
                                    </tr>
                                    <input type="hidden" name ="user_id" value="{{auth()->user()->id}}">

                                </form>
                            </table>
                            <a class="btn second-color mx-3 text-nowrap" href="{{ url()->previous() }}">Volver</a>

                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#selectAjax').on('change', function() {
        var valorSelect = $(this).val();
        
        $.ajax({
            url: '/selectAjax',
            type: 'GET',
            data: {
            valor: valorSelect
            },
            dataType: 'json',
            success: function(respuesta) {
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
</script>
@endsection