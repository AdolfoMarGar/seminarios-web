
@extends("layouts.mainlayout")

@section("title", "Inserción de documento")

@section("header", "Inserción de documento")

@section("content")
<div class="mx-4">
    <table class="table table-bordered table-striped">

        @isset($document)
            <form action="{{ route('documents.update', ['document' => $document->id]) }}" method="POST"enctype="multipart/form-data" >
            @method("PUT")
        @else        
            <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
        @endisset
            @csrf
            <tr>
                <th scope="col">Tipo de archivo:</th>
                <td>
                    <select class="form-select" aria-label="Default select example" name="type">
                        @isset($document)

                            <option  
                                @if($document->type==1)
                                        selected 
                                @endif 
                            value="1">PDF</option>
                            <option  
                                @if($document->type==2)
                                        selected 
                                @endif 
                            value="2">Presentación</option>
                            <option  
                                @if($document->type==3)
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
                            @isset($document)
                                @if ($document->seminar_id==$s->id)
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
                            @isset($document)
                                @if ($document->presentation_id==$s->id)
                                    selected 
                                @endif 
                            @endisset
                            
                            value="{{$s->id}}">{{$s->subject}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="col"><label for="chooseFile" class="form-label">Documento:</label></th>
                <td>
                    <input class="form-control" type="file" id="chooseFile">
                </td>
            </tr>
            <tr>
                <td scope="col" colspan="2">
                    <input  class="btn btn-primary" type="submit">
                </td>
            </tr>
            
    
        </form>
    </table>
@endsection