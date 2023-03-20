
@extends("layouts.adminLayout")

@section("content")
<script src ="{{url('js/modal.js')}}">
</script>
<div class="mx-4">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Año</th>
              <th scope="col">Lugar</th>
              <th scope="col">Hosts</th>
              <th scope="col" colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $cont = 1;
            @endphp
            @foreach ($seminarList as $seminar)
                <tr>
                    <th scope="row">{{$cont}}</td>
                    <td>{{$seminar->year}}</td>
                    <td>{{$seminar->location}}</td>
                    <td>{{$seminar->hosts}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('seminar.edit', $seminar->id)}}">Modificar</a></td>
                    <td>
                        <form action = "{{route('seminar.destroy', $seminar->id)}}" method="POST"class="botonBorrar">
                            @csrf
                            @method("DELETE")
                            <input class="btn btn-primary " type="submit" value="Borrar">
                        </form>
                    </td>
                @php
                    $cont = $cont+1;
                @endphp
                
            @endforeach
            <tr>
                <th scope="col" colspan="9">
                    <a class="btn btn-primary " href="{{ route('seminar.create') }}">Insertar seminario</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>

@endsection