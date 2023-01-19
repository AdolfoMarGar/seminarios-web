
@extends("layouts.master")

@section("title", "Inserción de documento")

@section("header", "Inserción de documento")

@section("content")
    @isset($document)
        <form action="{{ route('documents.update', ['document' => $document->id]) }}" method="POST">
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
        Dir:<input type="text" name="dir" value="{{$document->dir ?? '' }}"><br>
        <select name="seminar_id">
            @foreach($seminarList as $s)
                <option  
                @isset($presentation)
                    @if ($presentation->seminar_id==$s->id)
                        selected 
                    @endif 
                @endisset
                
                 value="{{$s->id}}">{{$s->year}}, {{$s->location}}</option>
            @endforeach
        </select>
    </br>
        <input type="file" name="file" id="chooseFile">
        <label for="chooseFile">Select file</label>
    </br>
        <input type="submit">
        </form>
@endsection