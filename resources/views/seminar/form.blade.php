
@extends("layouts.mainlayout")

@section("title", "Inserción de seminarios")

@section("header", "Inserción de seminarios")

@section("content")
    @isset($seminar)
        <form action="{{ route('seminar.update', ['seminar' => $seminar->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('seminar.store') }}" method="POST">
    @endisset
        @csrf
        Año del seminario:<input type="text" name="year" value="{{$seminar->year ?? '' }}"><br>
        Lugar:<input type="text" name="location" value="{{$seminar->location ?? '' }}"><br>
        Hosts:<input type="text" name="hosts" value="{{$seminar->hosts ?? '' }}"><br>
        <input type="submit">
        </form>
@endsection