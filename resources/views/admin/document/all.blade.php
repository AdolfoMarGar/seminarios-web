
@extends("layouts.adminLayout")


@section("content")
<script src ="{{url('js/deleteCheck.js')}}">
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Documentos</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-10 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 second-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>  
                            <a class="btn third-color mx-3 text-nowrap " href="{{ route('documents.create') }}">Insertar documento</a>

                            <br>
                            <br>
                                        
                            <table class="table table-striped " urlAjax="{{route('documents.check')}}">
                                <thead>
                                    <tr >
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Seminario</th>
                                        <th scope="col">Ponencia</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Asignación</th>
                                        <th scope="col" colspan="2">&emsp;Acciones</th>
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
                                                <td>{{$d->presentation->title}}</td>
                                            @else
                                                <td>Ninguna</td>
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
                                                @switch($d->mandatory)
                                                    @case(0)
                                                        Ninguno
                                                        @break  
                                                    @case(1)
                                                        Libro de acta
                                                        @break 
                                                    @case(2)
                                                        Libro de resumenes
                                                        @break
                                                    @case(3)
                                                        Programa
                                                        @break
                                                @endswitch
                                            </td>
                                            
                                            <td>
                                                <a class="btn  third-color mx-3 text-nowrap" href="{{route('documents.edit', $d->id)}}">Modificar</a></td>
                                            <td>
                                                <form action = "{{route('documents.destroy', $d->id)}}" method="POST" class="botonBorrar" id='botonBorrar{{$d->id}}'>
                                                    @csrf
                                                    @method("DELETE")
                                                    <input class="btn  third-color mx-3 text-nowrap" type="submit" value="Borrar">
                                                </form>
                                            </td>
                                        @php
                                            $cont = $cont+1;
                                        @endphp
                                        </tr>
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