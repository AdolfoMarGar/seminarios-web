
@extends("layouts.mainLayout")

@section("content")
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
        <div class="section-title text-center ">
            <br>
            <h1 class="top-c-sep"><u>Seminario {{$presentation->seminar->location}}, {{$presentation->seminar->year}}</u></h1>
        </div>
    </div>    
    <div class="card mb-4 mx-auto pb-4 third-color" style="max-width: 850px;" >
        <div class="row g-0">
            <div class="col-md-12">
                <div class="card-body">
                    <h5 class="card-title text-center">Titulo: {{$presentation->title}}</h5>
                    <p class="card-text mb-3">Tema: {{$presentation->subject}}</p>
                    <p class="card-text mb-3">Palabras clave: {{$presentation->keywords}}</p>
                </div>
                <div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding ">
                    <div 
                    class="responsive-wrapper mx-4 responsive-wrapper-wxh-572x612" 
                    style="-webkit-overflow-scrolling: touch; overflow: auto;"
                    >

                    <iframe src="{{url($doc->dir??"null")}}"> 
                    </iframe>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text mb-3">Autores:  
                        @php
                            $cont=0;
                            foreach ($presentation->speaker as $sp) {
                                if($cont!=0){
                                    echo(", ");
                                }
                                echo($sp->name." ".$sp->lastname);
                                
                                $cont = $cont +1;

                            }
                            echo(".");
                        @endphp

                    </p>
                    <div> 
                        <a class="btn btn-primary  mx-3 text-nowrap" href="{{ url()->previous() }}">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection