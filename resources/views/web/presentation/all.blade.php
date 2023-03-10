
@extends("layouts.mainLayout")

@section("content")
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
                                <input type="text" class="form-control" placeholder="Ej: Suelo" id="keywords">
                            </div>
                        </div>
                        <div class="col-lg-5 my-3">
                            <div >
                                <select class="custom-select">
                                    <option value="1">Tema</option>
                                    <option value="2">Titulo</option>
                                    <option value="3">Palabra clave</option>
                                    <option value="3">Ponente</option>
                                </select>
                            </div>
                        </div>
                       <div class="col-lg-1">
                       </div>
                        <div class="col-lg-1 my-3 " >
                            <button type="button" class="btn btn-lg btn-block btn-light btn-custom second-color" id="contact-submit">
                                Buscar
                            </button>
                        </div>
                    </div>
                </form>
            </br>

                <div class="filter-result">    
                    @for($i=0; $i<count($yearList); $i++)
                        @foreach ($presentationList as $pre)
                            @if ($pre->seminar->year==$yearList[$i]->year)
                                <h2 class="text-left mx-auto" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$yearList[$i]->location}}, {{$yearList[$i]->year}}</h2>

                                <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                    <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                        
                                        <div class="job-content">
                                            <h5 class=" ">&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp<i class="zmdi zmdi-flower-alt"></i></i> &nbsp &nbsp{{$pre->subject}}</h5>
                                            <p>
                                                &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp{{$pre->title}}
                                            </p>
                                            <p>
                                                &nbsp &nbsp&nbsp &nbsp &nbsp&nbspPalbras clave: {{$pre->keywords}}
                                            </p>
                                                
                                            
                                        </div>
                                    </div>
                                    <div class="job-right my-4 flex-shrink-0">
                                        <a class="btn btn-primary mx-3 text-nowrap" href="{{route('web.idPresentation', $pre->id)}}">Resumen</a>
                                        <a class="btn btn-primary mx-3 text-nowrap" href="{{route('web.idPresentation', $pre->id)}}">Presentaci??n</a>
            
                                        <a class="btn btn-primary  mx-3 text-nowrap"  href="/">Archivos relacionados</a>
    
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