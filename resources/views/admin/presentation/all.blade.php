
@extends("layouts.adminLayout")

@section("title", "Administración de presentation")

@section("header", "Administración de presentation")

@section("content")
<script src ="{{url('js/deleteCheck.js')}}">
</script>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Ponencias</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-10 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 second-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>  
                            <a class="btn third-color mx-3 text-nowrap " href="{{ route('presentation.create') }}">Insertar Ponencia</a>

                            <br>
                            <br>
                                        
                            <table class="table table-striped " urlAjax="{{route('presentation.check')}}">
                                <thead>
                                    <tr >
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
                                                <a class="btn  third-color mx-3 text-nowrap" href="{{route('presentation.edit', $p->id)}}">Modificar</a></td>
                                            <td>
                                                <form action = "{{route('presentation.destroy', $p->id)}}" method="POST" class="botonBorrar" id='botonBorrar{{$p->id}}'>
                                                    @csrf
                                                    @method("DELETE")
                                                    <input class="btn  third-color mx-3 text-nowrap" type="submit" value="Borrar">
                                                </form>
                                            </td>
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
@endsection