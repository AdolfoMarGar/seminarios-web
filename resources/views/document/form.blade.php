
@extends("layouts.master")

@section("title", "Inserción de documento")

@section("header", "Inserción de documento")

@section("content")
    @isset($document)
        <form action="{{ route('documents.update', ['document' => $document->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('documents.store') }}" method="POST">
    @endisset
        @csrf
        Type:<input type="text" name="type" value="{{$document->type ?? '' }}"><br>
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
        <input type="submit">
        </form>
@endsection