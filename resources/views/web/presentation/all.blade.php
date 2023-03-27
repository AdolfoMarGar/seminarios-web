
@extends("layouts.mainLayout")

@section("content")
<script src ="{{url('js/buscadorPresentation.js')}}">
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
        <div class="col-lg-9 mx-auto">
            <div class="career-search mb-60">
                <form action="#" class="career-form third-color mb-60 ">
                    <div class="row">
                        <div class="col-lg-5 my-3">
                            <div class="input-group position-relative">
                                <input type="text" id="busquedatxt" class="form-control" placeholder="Ej: Suelo" id="keywords">
                            </div>
                        </div>
                        <div class="col-lg-5 my-3">
                            <div >
                                <select class="custom-select" id="type">
                                    <option value="1">Tema</option>
                                    <option value="2">Titulo</option>
                                    <option value="3">Palabra clave</option>
                                    <option value="4">Ponente</option>
                                </select>
                            </div>
                        </div>
                       <div class="col-lg-1">
                       </div>
                        <div class="col-lg-1 my-3 " >
                            <button type="button" rutaActa="{{route('web.idPresentation', -1)}}"  urlAjax = "{{route('web.buscadorPresentation')}}" id="botonBusqueda" class="btn btn-lg btn-block btn-light btn-custom second-color" >
                                Buscar
                            </button>
                        </div>
                    </div>
                </form>
            </br>

                <div class="filter-result" id="divLista">    
                    @for($i=0; $i<count($yearList); $i++)
                        <h2 class="text-left mx-auto" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$yearList[$i]->location}}, {{$yearList[$i]->year}}</h2>
                        @foreach ($presentationList as $pre)
                            @if ($pre->seminar->year==$yearList[$i]->year)
                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">     
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="job-content">
                                        <h5 class=" "><i class="zmdi zmdi-flower-alt"></i></i> &nbsp &nbsp{{$pre->subject}}</h5>
                                        <p>
                                            {{$pre->title}}
                                        </p>
                                        <p>
                                            Palbras clave: {{$pre->keywords}}
                                        </p>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a class="btn  mx-3 text-nowrap third-color" href="{{route('web.idPresentation', $pre->id)}}">Resumen</a>
                                    <a class="btn  mx-3 text-nowrap third-color" href="{{route('web.idPresentation', $pre->id)}}">Presentación</a>
                                    <a class="btn  mx-3 text-nowrap third-color"  href="/">Archivos relacionados</a>

                                </div>
                            </div>
                            @endif
                        @endforeach
                    @endfor        
                </div>
        </div>
    </div>

</div>


    

@endsection