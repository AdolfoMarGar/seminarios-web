
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
        Username:<input type="text" name="username" value="{{$admin->username ?? '' }}"><br>
        Password:<input type="password" name="password" value="{{$admin->password ?? '' }}"><br>
        <input type="submit">
        </form>
@endsection