
@extends("layouts.mainlayout")

@section("title", "Inserción de seminarios")

@section("header", "Inserción de seminarios")

@section("content")
    <label>Text: {{$myrequest->text}}</label></br>

    <label>Type: 
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
    </label></br>

    <label>Seminar:
        {{$myrequest->document->seminar->year}}, {{$myrequest->document->seminar->location}}
    </label></br>
        
    @if ($myrequest->document->presentation!=null)
        <label>Presentation: {{$myrequest->document->presentation->subject}}</label></br>
    @else
        <label>Presentation: Ninguna</label></br>
    @endif
    
    <label>User: {{$myrequest->user->userdata->lastname}}, {{$myrequest->user->userdata->realname}} (({{$myrequest->user->username}}))</label></br>
    </br>
    <a href="{{route('request.acept', $myrequest->id)}}">Aceptar</a></td>
    <a href="{{route('request.myDestroy', $myrequest->id)}}">Rechazar</a></td>
    <a href="{{route('request.edit', $myrequest->id)}}">Modificar</a></td>

    
    
    
@endsection