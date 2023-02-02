
@extends("layouts.mainlayout")

@section("title", "Administración de speaker")

@section("header", "Administración de speaker")

@section("content")
<div class="mx-4">

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Localizacion</th>
              <th scope="col" colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $cont = 1;
            @endphp    
            @foreach ($speakerList as $speaker)
                <tr>
                    <th scope="row">{{$cont}}</td>
                    <td>{{$speaker->name}}</td>
                    <td>{{$speaker->lastname}}</td>
                    <td>{{$speaker->region}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('speaker.edit', $speaker->id)}}">Modificar</a></td>
                    <td>
                        <form action = "{{route('speaker.destroy', $speaker->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <input class="btn btn-primary" type="submit" value="Borrar">
                        </form>
                    </td>
                @php
                    $cont = $cont+1;
                @endphp
            @endforeach
            <tr>
                <th scope="col" colspan="9">
                    <a class="btn btn-primary"href="{{ route('speaker.create') }}">Insertar ponente</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>
@endsection