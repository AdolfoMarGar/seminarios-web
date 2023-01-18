
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
        type(1/2):<input type="text" name="type" value="{{$user->type ?? '' }}"><br>
        username:<input type="text" name="username" value="{{$user->username ?? '' }}"><br>
        password:<input type="text" name="password" value="{{$user->password ?? '' }}"><br>
        email:<input type="text" name="email" value="{{$user->userdata->email ?? '' }}"><br>
        realname:<input type="text" name="realname" value="{{$user->userdata->realname ?? '' }}"><br>
        lastname:<input type="text" name="lastname" value="{{$user->userdata->lastname ?? '' }}"><br>
        region:<input type="text" name="region" value="{{$user->userdata->region ?? '' }}"><br>
        <input type="submit">
        </form>
@endsection