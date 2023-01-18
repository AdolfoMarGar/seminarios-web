@extends("layouts.master")

@section("title", "Inserción de documento")

@section("header", "Inserción de documento")

@section("content")
    <form action="{{route('document.fileUpload')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <h3>Upload File in Laravel</h3>

        <input type="file" name="file" id="chooseFile">
            <label for="chooseFile">Select file</label>
            <input type="submit" >

        </form>
@endsection
