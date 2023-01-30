
@extends("layouts.mainlayout")

@section("title", "Inserción de documento")

@section("header", "Inserción de documento")

@section("content")
    @isset($document)
        <form action="{{ route('documents.update', ['document' => $document->id]) }}" method="POST"enctype="multipart/form-data" >
        @method("PUT")
    @else        
        <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
    @endisset
        @csrf
        Type:
        <select name="type">
            @isset($document)

                <option  
                    @if($document->type==-1)
                            selected 
                    @endif 
                value="-1">temp</option>
                <option  
                    @if($document->type==1)
                            selected 
                    @endif 
                value="1">pdf</option>
                <option  
                    @if($document->type==2)
                            selected 
                    @endif 
                value="2">ppt</option>
                <option  
                    @if($document->type==3)
                            selected 
                    @endif 
                value="3">photo</option>

            @else        

                <option value="-1">temp</option>
                <option value="1">pdf</option>
                <option value="2">ppt</option>
                <option value="3">photo</option>

            @endisset


        </select>
    </br>
        <select name="seminar_id">
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
    </br>
        <select name="presentation_id">
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
    </br>
        <input type="file" name="file" id="chooseFile">
        <label for="chooseFile">Select file</label>
    </br>
        <input type="submit">
        </form>
@endsection