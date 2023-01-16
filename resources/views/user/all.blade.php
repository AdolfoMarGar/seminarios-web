
@extends("layouts.master")

@section("title", "Administración de userio")

@section("header", "Administración de userio")

@section("content")
    <a href="{{ route('user.create') }}">Nuevo</a>
    <table border='1'>
    @foreach ($userList as $user)
        <tr>
            <td>{{$user->id}}</td>

            <td>{{$user->username}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->realname}}</td>
            <td>{{$user->lastname}}</td>
            <td>{{$user->region}}</td>

            <td>
                <a href="{{route('user.edit', $user->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('user.destroy', $user->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection