
@extends("layouts.master")

@section("title", "Administración de presentation")

@section("header", "Administración de presentation")

@section("content")
    <a href="{{ route('presentation.create') }}">Nuevo</a>
    <table border='1'>
    @foreach($presentationList as $p)
        <tr>
            <td>{{$p->id}}</td>

            <td>subject:{{$p->subject}}</td>
            <td>dir:{{$p->dir}}</td>
            <td>year:{{$p->seminar->year}}</td>
            <td>name speaker:</br>
            @foreach ($p->speaker as $s)
                {{$s->name}} {{$s->lastname}}</br>
            @endforeach
            </td>
            
            <td>
                <a href="{{route('presentation.edit', $p->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('presentation.destroy', $p->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        <br>

    @endforeach
    </table>
@endsection