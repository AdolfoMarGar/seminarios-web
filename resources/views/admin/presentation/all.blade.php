
@extends("layouts.adminLayout")

@section("title", "Administración de presentation")

@section("header", "Administración de presentation")

@section("content")
<script src ="{{url('js/modal.js')}}">
</script>
<div class="mx-4">

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tema</th>
              <th scope="col">Titulo</th>
              <th scope="col">Palabras clave</th>
              <th scope="col">Seminario</th>
              <th scope="col">Ponentes</th>
              <th scope="col" colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $cont = 1;
            @endphp
            @foreach($presentationList as $p)
                <tr>
                    <th scope="row">{{$cont}}</td>
                        <td>{{$p->subject}}</td>
                        <td>{{$p->title}}</td>
                        <td>{{$p->keywords}}</td>
                        <td>{{$p->seminar->year}}, {{$p->seminar->location}}</td>
                    <td>
                        @foreach ($p->speaker as $s)
                            {{$s->name}} {{$s->lastname}}.
                        @endforeach
                    </td>
                    
                    <td>
                        <a class="btn btn-primary" href="{{route('presentation.edit', $p->id)}}">Modificar</a></td>
                    <td>
                        <form action = "{{route('presentation.destroy', $p->id)}}" method="POST" class="botonBorrar">
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
                <th scope="col" colspan="8">
                    <a class="btn btn-primary" href="{{ route('presentation.create') }}">Insertar ponencia</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>
@endsection