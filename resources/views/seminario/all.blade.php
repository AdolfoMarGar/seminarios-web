
@extends("layouts.master")

@section("title", "Administración de seminario")

@section("header", "Administración de seminario")

@section("content")
    <a href="{{ route('seminario.create') }}">Nuevo</a>
    <table border='1'>
    @foreach ($seminarioList as $seminario)
        <tr>
            <td>{{$seminario->name}}</td>
            <td>{{$seminario->description}}</td>
            <td>{{$seminario->price}}</td>
            <td>{{$seminario->anio}}</td>
            <td>
                <a href="{{route('seminario.edit', $seminario->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('seminario.destroy', $seminario->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection