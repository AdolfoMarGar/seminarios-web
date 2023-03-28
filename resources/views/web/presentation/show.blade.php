
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
    <div class="card mb-4 mx-auto pb-4 second-color" style="max-width: 850px;" >
        <div class="row g-0">
            <div class="col-md-12">
                <div class="card-body">
                    <h4 class="card-title text-justify">{{$presentation->subject}}. {{$presentation->title}}</h4><br>
                    <h5 class="card-text mb-3">Ponentes:  
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
                    </h5>

                </div>
                @isset($record)
                    
                @endisset
                @if($doc==null)
                    <div class="card-body">
                        <h4>Este archivo no esta disponible</h4>
                        <h5>Si dispones de este archivo, puedes crearte una cuenta y realizar una aportacion a la página web.</h5>
                    </div>
                @else
                    <div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding ">
                    <div 
                    class="responsive-wrapper mx-4 responsive-wrapper-wxh-572x612" 
                    style="-webkit-overflow-scrolling: touch; overflow: auto;"
                    >

                    <iframe src="{{url($doc->dir??"null")}}"> 
                    </iframe>
                    </div>
                </div>
                
                @endif
                
                <div class="card-body">
                   

                    <div> 
                        <a class="btn third-color mx-2 text-nowrap" href="{{ url()->previous() }}">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection