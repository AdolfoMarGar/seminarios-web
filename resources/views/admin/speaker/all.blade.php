
@extends("layouts.adminLayout")

@section("title", "Administración de speaker")

@section("header", "Administración de speaker")

@section("content")
<script src ="{{url('js/modal.js')}}">
</script>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Ponentes</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-10 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 second-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>  
                            <a class="btn third-color mx-3 text-nowrap " href="{{ route('speaker.create') }}">Insertar ponente</a>

                            <br>
                            <br>
                                        
                            <table class="table table-striped ">
                                <thead>
                                    <tr >
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Localizacion</th>
                                        <th scope="col" colspan="2">Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $cont = 1;
                                    @endphp    
                                    @foreach ($speakerList as $speaker)
                                        <tr>
                                            <th scope="row">{{$cont}}</td>
                                            <td>{{$speaker->name}}</td>
                                            <td>{{$speaker->lastname}}</td>
                                            <td>{{$speaker->region}}</td>
                                            <td>
                                                <a class="btn  third-color mx-3 text-nowrap " href="{{route('speaker.edit', $speaker->id)}}">Modificar</a></td>
                                            <td>
                                                <form action = "{{route('speaker.destroy', $speaker->id)}}" method="POST" class="botonBorrar" id='botonBorrar{{$speaker->id}}'>
                                                    @csrf
                                                    @method("DELETE")
                                                    <input class="btn  third-color mx-3 text-nowrap " type="submit" value="Borrar">
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