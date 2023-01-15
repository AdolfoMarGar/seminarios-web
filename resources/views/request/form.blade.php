
@extends("layouts.master")

@section("title", "Inserción de seminarios")

@section("header", "Inserción de seminarios")

@section("content")
    @isset($myrequest)
        <form action="{{ route('request.update', ['request' => $myrequest->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('request.store') }}" method="POST">
    @endisset
        @csrf
        Text:<input type="text" name="text" value="{{$myrequest->text ?? '' }}"><br>
        Year:<input type="text" name="year" value="{{$myrequest->year ?? '' }}"><br>
        Type:<input type="text" name="type" value="{{$myrequest->type ?? '' }}"><br>
        Dir:<input type="text" name="dir" value="{{$myrequest->dir ?? '' }}"><br>
        <select name="user_id">
            @foreach($userList as $s)
                <option  
                @isset($myrequest)
                    @if ($myrequest->user_id==$s->id)
                        selected 
                    @endif 
                @endisset
                
                 value="{{$s->id}}">{{$s->username}}</option>
            @endforeach
        </select>
        <input type="submit">
        </form>
@endsection