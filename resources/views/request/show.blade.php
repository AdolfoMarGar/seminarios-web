
@extends("layouts.mainlayout")

@section("title", "Inserción de seminarios")

@section("header", "Inserción de seminarios")

@section("content")
<div class="mx-4">
    <table class="table table-bordered table-striped">
        <tr>
            <th scope="col">Información:</th>
            <td >{{$myrequest->text}}</td>
        </tr>
        <tr>
            <th scope="col">Tipo de archivo:</th>
            <td >
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
                    No hay tipo seleccionado
                @endswitch    
            </td>
        </tr>

        <tr>
            <th scope="col">Seminario:</th>
            <td >{{$myrequest->document->seminar->year}}, {{$myrequest->document->seminar->location}}</td>
        </tr>

        <tr>
            <th scope="col">Ponencia:</th>
            <td >
                @if ($myrequest->document->presentation!=null)
                    {{$myrequest->document->presentation->subject}}
                @else
                    Ninguna
                @endif    
            </td>
        </tr>

        <tr>
            <th scope="col">Seminario:</th>
            <td >{{$myrequest->user->userdata->lastname}}, {{$myrequest->user->userdata->realname}} ({{$myrequest->user->username}})</td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="{{route('request.acept', $myrequest->id)}}" class="btn btn-primary">Aceptar</a>
                <a href="{{route('request.myDestroy', $myrequest->id)}}" class="btn btn-primary">Rechazar</a>
                <a href="{{route('request.edit', $myrequest->id)}}" class="btn btn-primary">Modificar</a>
            </td>
        </tr>
        
    </table>
</div>
@endsection