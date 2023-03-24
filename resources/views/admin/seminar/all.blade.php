
@extends("layouts.adminLayout")

@section("content")
<script src ="{{url('js/modal.js')}}">
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Seminarios</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-10 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 second-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>  
                            <a class="btn third-color mx-3 text-nowrap " href="{{ route('seminar.create') }}">Insertar seminario</a>

                            <br>
                            <br>
                                        
                            <table class="table table-striped ">
                                <thead>
                                    <tr >
                                        <th scope="col">#</th>
                                        <th scope="col">Año</th>
                                        <th scope="col">Localización</th>
                                        <th scope="col">Organizadores</th>
                                        <th scope="col" colspan="2">&emsp;Acciones</th>
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
                                                <a class="btn  third-color mx-3 text-nowrap" href="{{route('seminar.edit', $seminar->id)}}">Modificar</a></td>
                                            <td>
                                                <form action = "{{route('seminar.destroy', $seminar->id)}}" method="POST"class="botonBorrar" id='botonBorrar{{$seminar->id}}'>
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