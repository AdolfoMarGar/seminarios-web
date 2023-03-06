
@extends("layouts.adminLayout")

@section("title", "Inserción de seminarios")

@section("header", "Inserción de seminarios")

@section("content")
<div class="mx-4">
    <table class="table table-bordered table-striped">
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
                        <textarea class="form-control" name="text" rows="3" >{{$myrequest->text ?? '' }}</textarea>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="col">Tipo de archivo:</th>
                <td>
                    <select class="form-select" aria-label="Default select example" name="type">
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
                    <select class="form-select" aria-label="Default select example" name="seminar_id">
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
                    <select class="form-select" aria-label="Default select example" name="presentation_id">
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
                <th scope="col">Usuario:</th>
                <td>
                    <select class="form-select" aria-label="Default select example" name="user_id">
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
                    <input class="form-control" type="file" id="chooseFile" name="file">
                </td>
            </tr>
            <tr>
                <td scope="col" colspan="2">
                    <input  class="btn btn-primary" type="submit">
                </td>
            </tr>
        </form>
    </table>
</div>
@endsection