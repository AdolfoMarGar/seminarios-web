
@extends("layouts.adminLayout")


@section("content")
<script src ="{{url('js/modal.js')}}">
</script>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Aportes</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-10 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 second-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>  
                            <a class="btn third-color mx-3 text-nowrap " href="{{ route('request.create') }}">Insertar Aporte</a>

                            <br>
                            <br>
                                        
                            <table class="table table-striped ">
                                <thead>
                                    <tr >
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
                                            <td>{{$myrequest->user->username}}</td>
                                            <td>
                                                <a class="btn  third-color mx-3 text-nowrap "  href="{{route('request.show', $myrequest->id)}}">Gestionar</a></td>
                                            <td>
                                                <a class="btn  third-color mx-3 text-nowrap " href="{{route('request.edit', $myrequest->id)}}">Modificar</a></td>
                                            <td>
                                                <form action = "{{route('request.destroy', $myrequest->id)}}" method="POST" class="botonBorrar" id='botonBorrar{{$myrequest->id}}'>
                                                    @csrf
                                                    @method("DELETE")
                                                    <input  class="btn  third-color mx-3 text-nowrap " type="submit" value="Borrar">
                                                </form>
                                            </td>
                                        @php
                                            $cont= $cont+1;
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

@endsection