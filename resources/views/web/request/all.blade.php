
@extends("layouts.mainLayout")

@section("content")
<script src ="{{url('js/modal.js')}}">
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Mis aportes</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-9 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 second-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>  
                            
                            <a class="btn third-color mx-3 text-nowrap" href="{{route('web.newRequest')}}">Nuevo aporte</a>
                            <br>
                            <br>
                                        
                            <table class="table table-striped ">
                                <thead>
                                    <tr >
                                        <th scope="col">#</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Seminario</th>
                                        <th scope="col">Ponencia</th>
                                        <th scope="col">Ponentes</th>
                                        <th scope="col" colspan="2">&emsp;Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $cont = 1;
                                    @endphp
                                    @foreach ($requestList as $myrequest)
                                        <tr scope="row">
                                            <th scope="row">{{$cont}}</td>
                                                <td>{{$myrequest->text}}</td>
                                                <td>{{$myrequest->document->seminar->location}}, {{$myrequest->document->seminar->year}}</td>
                                                @if (isset($myrequest->document->presentation))
                                                    <td>{{$myrequest->document->presentation->subject}}</td> 
                                                @else
                                                    <td>Ninguna</td>
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
                                                <td>
                                                    <a class="btn third-color mx-3 text-nowrap" href="{{route('web.editRequest', $myrequest->id)}}">Editar</a>

                                                </td>
                                                    <td>
                                                    <form action = "{{route('request.destroy', $myrequest->id)}}" method="POST" class="botonBorrar"id='botonBorrar{{$myrequest->id}}'>
                                                        @csrf
                                                        @method("DELETE")
                                                        <input  class="btn third-color" type="submit" value="Borrar">
                                                    </form>
                                                </td>
                                            </tr> 
                                        @php
                                            $cont = $cont+1;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>


    
<div id="modal" style="display: none;" class="first-color">
    <p>¿Estás seguro de que quieres borrar este elemento?</p>
    <button id="confirmar" class="second-color">Sí, borrar</button>
    <button id="cancelar" class="second-color">Cancelar</button>
  </div>
  
@endsection