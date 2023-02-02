
@extends("layouts.mainlayout")


@section("content")
<div class="mx-4">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Texto</th>
              <th scope="col">Año</th>
              <th scope="col">Presentacion</th>
              <th scope="col">Tipo</th>
              <th scope="col">Usuario</th>
              <th scope="col" colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $cont = 1;
            @endphp
            @foreach ($myrequestList as $myrequest)
                <tr>
                    <th scope="row">{{$cont}}</td>
                    <td>{{$myrequest->text}}</td>
                    <td>{{$myrequest->document->seminar->year}}</td>
                    @if (isset($myrequest->document->presentation))
                        <td>{{$myrequest->document->presentation->subject}}</td> 
                    @else
                        <td></td>
                    @endif
                    <td>
                        @switch($myrequest->type)
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
                    <td>{{$myrequest->user->username}}</td>
                    <td>
                        <a class="btn btn-primary"  href="{{route('request.show', $myrequest->id)}}">Gestionar</a></td>
                    <td>
                        <a class="btn btn-primary" href="{{route('request.edit', $myrequest->id)}}">Modificar</a></td>
                    <td>
                        <form action = "{{route('request.destroy', $myrequest->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <input  class="btn btn-primary" type="submit" value="Borrar">
                        </form>
                    </td>
                @php
                    $cont= $cont+1;
                @endphp
            @endforeach
            <tr>
                <th scope="col" colspan="9">
                    <a class="btn btn-primary" href="{{ route('request.create') }}">Insertar petición</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>
@endsection