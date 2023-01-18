
@extends("layouts.master")

@section("title", "Administración de userio")

@section("header", "Administración de userio")

@section("content")
    <a href="{{ route('user.create') }}">Nuevo</a>
    <table border='1'>
    @foreach ($userList as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->type}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->password}}</td>
            @if ($user->type==2)
                <td>{{$user->userData->email}}</td>
                <td>{{$user->userData->realname}}</td>
                <td>{{$user->userData->lastname}}</td>
                <td>{{$user->userData->region}}</td>
            @else
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            @endif
            
            <td>
                <a href="{{route('user.edit', $user->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('user.destroy', $user->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>
    @endforeach
    </table>
@endsection