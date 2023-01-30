
@extends("layouts.mainlayout")


@section("content")
<div class="mx-4">
    <a class="btn btn-primary" href="{{ route('documents.create') }}">Insertar documento</a>
</br> </br>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Seminario</th>
              <th scope="col">Presentacion</th>
              <th scope="col">Tipo</th>
              <th scope="col" colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $cont = 1;
            @endphp
            @foreach ($documentList as $d)
                <tr>
                    <th scope="row">{{$cont}}</td>
                    <td>{{$d->dir}}</td>
                    <td>{{$d->seminar->year}}, {{$d->seminar->location}}</td>
                    @if (isset($d->presentation))
                        <td>{{$d->presentation->subject}}</td>
                    @else
                        <td></td>
                    @endif
                    <td>
                        @switch($d->type)
                            @case(-1)
                                TEMPORAL
                                @break 
                            @case(1)
                                PDF
                                @break
                            @case(2)
                                PPT
                                @break
                            @case(3)
                                Photo
                                @break
                            @default
                        @endswitch
                    </td>
                    
                    <td>
                        <a class="btn btn-primary" href="{{route('documents.edit', $d->id)}}">Modificar</a></td>
                    <td>
                        <form action = "{{route('documents.destroy', $d->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <input class="btn btn-primary" type="submit" value="Borrar">
                        </form>
                    </td>
                @php
                    $cont = $cont+1;
                @endphp
            @endforeach
        </tbody>
    </table>
</div>
@endsection