
@extends("layouts.mainlayout")

@section("title", "Inserción de presentation")

@section("header", "Inserción de presentation")

@section("content")
    @isset($presentation)
        <form action="{{ route('presentation.update', ['presentation' => $presentation->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('presentation.store') }}" method="POST">
    @endisset
        @csrf
        Subject:<input type="text" name="subject" value="{{$presentation->subject ?? '' }}"><br>
        Dir:<input type="text" name="dir" value="{{$presentation->dir ?? '' }}"><br>
        Seminar:
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
        Speaker:
        <select name="speaker_id">
            @foreach($speakerList as $s)
            <option  
            @isset($presentation)
                @if ($presentation->speaker_id==$s->id)
                        selected 
                @endif 
            @endisset
             value="{{$s->id}}">{{$s->lastname}}, {{$s->name}}</option>
            @endforeach
        </select>
                
        <input type="submit">
        </form>
@endsection