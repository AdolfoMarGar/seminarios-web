
@extends("layouts.mainLayout")

@section("content")
<script src ="{{url('js/buscadorSeminar.js')}}">
</script>
<div class="container-fluid">
    <div class="row">
            <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Histórico de seminarios</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-9 mx-auto">
            <div class="career-search mb-60">

                <form action="#" class="career-form third-color mb-60 ">
                    <div class="row">
                        <div class="col-lg-5 my-3">
                            <div class="input-group position-relative">
                                <input type="text"id="busquedatxt" class="form-control" placeholder="Ej: 2002" id="keywords">
                            </div>
                        </div>
                        <div class="col-lg-5 my-3">
                            <div >
                                <select class="custom-select" id="type">
                                    <option value="1">Año</option>
                                    <option value="2">Localización</option>
                                    <option value="3">Organizador</option>
                                </select>
                            </div>
                        </div>
                       <div class="col-lg-1">
                       </div>
                        <div class="col-lg-1 my-3 " >
                            <button type="button"  urlAjax = "{{route('web.buscadorSeminar')}}" id="botonBusqueda" class="btn btn-lg btn-block btn-light btn-custom second-color">
                                Buscar
                            </button>
                        </div>
                    </div>
                </form>
            </br>

                <div class="filter-result" id="divLista"  >                
                    @foreach ($seminarList as $seminar)
                    <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                        <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                            <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                {{$seminar->year}}
                            </div>
                            <div class="job-content" >
                                <h5 class=" ">&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp<i class="zmdi zmdi-pin mr-2"></i> &nbsp &nbsp{{$seminar->location}}</h5>
                                <ul class="d-md-flex flex-wrap  ff-open-sans">
                                    <li class="mr-md-4">
                                        Organizado por {{$seminar->hosts}}.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-right my-4 flex-shrink-0" id="rutas" rutaActa="{{route('web.idSeminar', -1)}}">>
                            <a class="btn second-color mx-3 text-nowrap" href="{{route('web.idSeminar', $seminar->id)}}">Libro de actas</a>
                            <a class="btn second-color  mx-3 text-nowrap"  href="{{route('web.idSeminar', $seminar->id)}}">Libro de resumenes</a>
                            <a class="btn second-color  mx-3 text-nowrap" href="{{route('web.idSeminar', $seminar->id)}}">Contenido audiovisual</a>

                        </div>
                    </div>
                        
                    @endforeach
                </div>
            </div>

            
        </div>
    </div>

</div>

@endsection