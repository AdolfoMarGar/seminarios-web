
@extends("layouts.master")

@section("title", "Inserción de userios")

@section("header", "Inserción de userios")

@section("content")
    @isset($user)
        <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('user.store') }}" method="POST">
    @endisset
        @csrf
        username:<input type="text" name="username" value="{{$user->username ?? '' }}"><br>
        password:<input type="text" name="password" value="{{$user->password ?? '' }}"><br>
        email:<input type="text" name="email" value="{{$user->email ?? '' }}"><br>
        realname:<input type="text" name="realname" value="{{$user->realname ?? '' }}"><br>
        lastname:<input type="text" name="lastname" value="{{$user->lastname ?? '' }}"><br>
        region:<input type="text" name="region" value="{{$user->region ?? '' }}"><br>
        <input type="submit">
        </form>
@endsection