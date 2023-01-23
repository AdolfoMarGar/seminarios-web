
@extends("layouts.master")

@section("title", "Administración de documentos")

@section("header", "Administración de documentos")

@section("content")
    <a href="{{ route('documents.create') }}">Nuevo</a>
    <table border='1'> 
    @foreach ($documentList as $d)
        <tr>
            <td>{{$d->seminar->year}}, {{$d->seminar->location}}</td>
            @if (isset($d->presentation))
                <td>{{$d->presentation->subject}}</td>
            @else
                <td></td>
            @endif
            <td>
                @switch($d->type)
                    @case(-1)
                        TEMPORAL
                        @break 
                    @case(1)
                        PDF
                        @break
                    @case(2)
                        PPT
                        @break
                    @case(3)
                        Photo
                        @break
                    @default
                @endswitch
            </td>
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
        </br>
    @endforeach
    </table>
@endsection