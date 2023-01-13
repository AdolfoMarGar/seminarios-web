
@extends("layouts.master")

@section("title", "Administración de documentos")

@section("header", "Administración de documentos")

@section("content")
    <a href="{{ route('documents.create') }}">Nuevo</a>
    <table border='1'> 
    @foreach ($documentList as $d)
        <tr>
            <td>{{$d->seminar->year}}, {{$d->seminar->location}}</td>
            <td>{{$d->type}}</td>
            <td>{{$d->dir}}</td>
            
            <td>
                <a href="{{route('documents.edit', $d->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('documents.destroy', $d->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection