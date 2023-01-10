
@extends("layouts.master")

@section("title", "Administración de documentos")

@section("header", "Administración de documentos")

@section("content")
    <a href="{{ route('documents.create') }}">Nuevo</a>
    <table border='1'> 
    @for ($i = 0; $i < count($documentList); $i++)
        <tr>
            <td>{{$yearList[$i]->year}}</td>
            <td>{{$documentList[$i]->type}}</td>
            <td>{{$documentList[$i]->dir}}</td>
            
            <td>
                <a href="{{route('documents.edit', $documentList[$i]->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('documents.destroy', $documentList[$i]->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        <br>
    @endfor
    </table>
@endsection