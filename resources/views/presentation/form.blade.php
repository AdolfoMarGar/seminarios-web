
@extends("layouts.master")

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
        <input type="submit">
        </form>
@endsection