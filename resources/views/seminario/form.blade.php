
@extends("layouts.master")

@section("title", "Inserción de seminarioos")

@section("header", "Inserción de seminarioos")

@section("content")
    @isset($seminario)
        <form action="{{ route('seminario.update', ['seminario' => $seminario->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('seminario.store') }}" method="POST">
    @endisset
        @csrf
        Nombre del seminario:<input type="text" name="name" value="{{$seminario->name ?? '' }}"><br>
        Descripción:<input type="text" name="description" value="{{$seminario->description ?? '' }}"><br>
        Precio:<input type="text" name="price" value="{{$seminario->price ?? '' }}"><br>
        Año:<input type="text" name="anio" value="{{$seminario->anio ?? '' }}"><br>
        <input type="submit">
        </form>
@endsection