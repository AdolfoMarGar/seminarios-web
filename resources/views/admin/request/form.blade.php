
@extends("layouts.adminLayout")

@section("title", "Inserción de seminarios")

@section("header", "Inserción de seminarios")

@section("content")
<script src ="{{url('js/selectAjax.js')}}">
</script>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Nueva Petición</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-10 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 second-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>     
                            <table class="table table-bordered  table-striped myBorderColor">
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
                                            <select class="form-select first-color" urlAjax = "{{route('web.selectAjax')}}" id="selectAjax" aria-label="Default select example" name="seminar_id">
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
                                            <select class="form-select first-color"  id="selectRecargar" aria-label="Default select example" name="presentation_id">
                                                <option value="{{null}}">Ninguno</option>
                                                @foreach($presentationList as $s)
                                                    <option  
                                                    @isset($myrequest)
                                                        @if ($myrequest->document->presentation_id==$s->id)
                                                            selected 
                                                        @endif 
                                                    @endisset
                                                    
                                                    value="{{$s->id}}">{{$s->subject}}, {{$s->title}} </option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <th scope="col">Usuario:</th>
                                        <td>
                                            <select class="form-select first-color" aria-label="Default select example" name="user_id">
                                                @foreach($userList as $s)
                                                    <option  
                                                        @isset($myrequest)
                                                            @if ($myrequest->user_id==$s->id)
                                                                selected 
                                                            @endif 
                                                        @endisset
                                                    
                                                    value="{{$s->id}}">{{$s->email}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col"><label for="chooseFile" class="form-label">Documento:</label></th>
                                        <td>
                                            <input class="form-control first-color" type="file" id="chooseFile" name="file">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="col" colspan="2">
                                            <input  class="btn third-color  text-nowrap" type="submit">
                                            <a class="btn third-color mx-2 text-nowrap" href="{{ url()->previous() }}">Volver</a>
                                        </td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>


@endsection