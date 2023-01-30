
@extends("layouts.mainlayout")

@section("title", "Inserción de seminarios")

@section("header", "Inserción de seminarios")

@section("content")
<div class="mx-4">
    <table class="table table-bordered table-striped">
        @isset($seminar)
            <form action="{{ route('seminar.update', ['seminar' => $seminar->id]) }}" method="POST">
            @method("PUT")
        @else
            <form action="{{ route('seminar.store') }}" method="POST">
        @endisset
            @csrf
            <tr>
                <th scope="col">Año del seminario:</th>
                <td>
                    <input name="year" class="form-control" type="text" placeholder="2000" aria-label="default input example" value="{{$seminar->year ?? '' }}">
                </td>
            </tr>

            <tr>
                <th scope="col">Localización:</th>
                <td>
                    <input name="location" class="form-control" type="text" placeholder="Pulpi, Almeria" aria-label="default input example" value="{{$seminar->location ?? '' }}">
                </td>
            </tr>
            <tr>
                <th scope="col">Hosts:</th>
                <td>
                    <input name="hosts" class="form-control" type="text" placeholder="Empresa S.L." aria-label="default input example" value="{{$seminar->hosts ?? '' }}">
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