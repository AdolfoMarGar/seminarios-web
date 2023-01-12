
@extends("layouts.master")

@section("title", "Administración de admin")

@section("header", "Administración de admin")

@section("content")
    <a href="{{ route('admin.create') }}">Nuevo</a>
    <table border='1'>
    @foreach ($adminList as $admin)
        <tr>
            <td>{{$admin->id}}</td>

            <td>{{$admin->username}}</td>
            <td>{{$admin->password}}</td>
            <td>
                <a href="{{route('admin.edit', $admin->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('admin.destroy', $admin->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection