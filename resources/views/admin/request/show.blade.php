
@extends("layouts.adminLayout")

@section("title", "Inserción de seminarios")

@section("header", "Inserción de seminarios")

@section("content")


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Gestión de aportes</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-9 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 second-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>  

                            <table class="table table-striped ">
                                <tr>
                                    <th colspan="2" scope="col">Información:</th>
                                    <td colspan="2" >{{$myrequest->text}}</td>
                                </tr>
                                <tr>
                                    <th colspan="2" scope="col">Tipo de archivo:</th>
                                    <td colspan="2" >
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
                                    <th colspan="2" scope="col">Seminario:</th>
                                    <td colspan="2" >{{$myrequest->document->seminar->year}}, {{$myrequest->document->seminar->location}}</td>
                                </tr>
                        
                                <tr>
                                    <th colspan="2" scope="col">Ponencia:</th>
                                    <td colspan="2" >
                                        @if ($myrequest->document->presentation!=null)
                                            {{$myrequest->document->presentation->subject}}
                                        @else
                                            Ninguna
                                        @endif    
                                    </td>
                                </tr>
                        
                                <tr>
                                    <th colspan="2" scope="col">Seminario:</th>
                                    <td colspan="2" >{{$myrequest->user->userdata->lastname}}, {{$myrequest->user->userdata->realname}}</td>
                                </tr>
                                <tr>
                                    <td >
                                        <a href="{{route('request.acept', $myrequest->id)}}" class="btn mr-4  third-color">Aceptar</a>
                                    </td>
                                    <td >
                                        <form action = "{{route('request.destroy', $myrequest->id)}}" method="POST" class="botonBorrar" id='botonBorrar{{$myrequest->id}}'>
                                            @csrf
                                            @method("DELETE")
                                            <input  class="btn  third-color mx-3 text-nowrap " type="submit" value="Rechazar">
                                        </form>
                                    </td>
                                    <td >
                                        <a href="{{route('request.edit', $myrequest->id)}}" class="btn mx-2  third-color">Modificar</a>

                                    </td>
                                    <td >
                                        <a class="btn third-color mx-2 text-nowrap" href="{{ url()->previous() }}">Volver</a>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection