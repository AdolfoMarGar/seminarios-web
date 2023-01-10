
@extends("layouts.master")

@section("title", "Administración de seminario")

@section("header", "Administración de seminario")

@section("content")
    <a href="{{ route('seminar.create') }}">Nuevo</a>
    <table border='1'>
    @foreach ($seminarList as $seminar)
        <tr>
            <td>{{$seminar->id}}</td>

            <td>{{$seminar->year}}</td>
            <td>{{$seminar->location}}</td>
            <td>{{$seminar->hosts}}</td>
            <td>
                <a href="{{route('seminar.edit', $seminar->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('seminar.destroy', $seminar->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection