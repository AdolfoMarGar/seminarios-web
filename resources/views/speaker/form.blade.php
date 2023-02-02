
@extends("layouts.mainlayout")

@section("title", "Inserción de speaker")

@section("header", "Inserción de speaker")

@section("content")
<div class="mx-4">
    <table class="table table-bordered table-striped">
        @isset($speaker)
            <form action="{{ route('speaker.update', ['speaker' => $speaker->id]) }}" method="POST">
            @method("PUT")
        @else
            <form action="{{ route('speaker.store') }}" method="POST">
        @endisset
            @csrf
            <tr>
                <th scope="col">Nombre:</th>
                <td>
                    <input name="name" class="form-control" type="text" placeholder="Ej. Juani" aria-label="default input example" value="{{$speaker->name ?? '' }}">
                </td>
            </tr>
            <tr>
                <th scope="col">Apellidos:</th>
                <td>
                    <input name="lastname" class="form-control" type="text" placeholder="Ej. Ramírez" aria-label="default input example" value="{{$speaker->lastname ?? '' }}">
                </td>
            </tr>
            <tr>
                <th scope="col">Provincia:</th>
                <td>
                    <input name="region" class="form-control" type="text" placeholder="Ej. Badajoz" aria-label="default input example" value="{{$speaker->region ?? '' }}">
                </td>
            </tr>
            <tr>
                <td scope="col" colspan="2">
                    <input  class="btn btn-primary" type="submit">
                </td>
            </tr>
            </form>
    </table>
</div>
@endsection