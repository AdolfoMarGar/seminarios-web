
@extends("layouts.master")

@section("title", "Administración de speaker")

@section("header", "Administración de speaker")

@section("content")
    <a href="{{ route('speaker.create') }}">Nuevo</a>
    <table border='1'>
    @foreach ($speakerList as $speaker)
        <tr>
            <td>{{$speaker->id}}</td>

            <td>{{$speaker->name}}</td>
            <td>{{$speaker->lastname}}</td>
            <td>{{$speaker->region}}</td>
            <td>
                <a href="{{route('speaker.edit', $speaker->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('speaker.destroy', $speaker->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection