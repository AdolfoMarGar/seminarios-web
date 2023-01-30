
@extends("layouts.mainlayout")

@section("title", "Inserción de speaker")

@section("header", "Inserción de speaker")

@section("content")
    @isset($speaker)
        <form action="{{ route('speaker.update', ['speaker' => $speaker->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('speaker.store') }}" method="POST">
    @endisset
        @csrf
        Name:<input type="text" name="name" value="{{$speaker->name ?? '' }}"><br>
        Lastname:<input type="text" name="lastname" value="{{$speaker->lastname ?? '' }}"><br>
        Region:<input type="text" name="region" value="{{$speaker->region ?? '' }}"><br>
        <input type="submit">
        </form>
@endsection