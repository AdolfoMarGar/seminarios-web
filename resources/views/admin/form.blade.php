
@extends("layouts.master")

@section("title", "Inserción de admin")

@section("header", "Inserción de admin")

@section("content")
    @isset($admin)
        <form action="{{ route('admin.update', ['admin' => $admin->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('admin.store') }}" method="POST">
    @endisset
        @csrf
        Username:<input type="text" name="username" value="a"><br>
        Password:<input type="text" name="password" value="{{$admin->password ?? '' }}"><br>
        Realname:<input type="text" name="realname" value="{{$admin->realname ?? '' }}"><br>
        Lastname:<input type="text" name="lastname" value="{{$admin->lastname ?? '' }}"><br>
        email:<input type="text" name="email" value="{{$admin->email ?? '' }}"><br>
        <input type="submit">
        </form>
@endsection