
@extends("layouts.mainLayout")

@section("content")

    <div class="container-fluid">
        <div class="mx-4">
            <table class="table border-0">
                <tr>
                    <td>
                        <h2>Seminario {{$seminar->location}}, {{$seminar->year}}</h2>

                    </td>
                    <td>
                        Buscador(prox.)
                    </td>
                </tr>
            </table>
            <div class="card mb-4 mx-auto pb-4 third-color" style=" max-width: 850px;" >
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$seminar->location}}, {{$seminar->year}}</h5>
                            Libro de actas
                        </div>
                        <div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding ">
                            <div 
                            class="responsive-wrapper mx-4 responsive-wrapper-wxh-572x612" 
                            style="-webkit-overflow-scrolling: touch; overflow: auto;"
                            >
                            <iframe src="{{url($acta)}}"> 
                            </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                
            
            @foreach ($presentationList as $p)
                <div class="card mb-4 mx-auto" style=" max-width: 850px;" >
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title text-center">Tema: {{$p->subject}}</h5>
                                <h5 class="card-title text-center">Titulo: {{$p->title}}</h5>
                                <p class="card-text mb-3">Autores:  
                                    @php
                                        $cont=0;
                                        foreach ($p->speaker as $sp) {
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
                                    <a class="btn btn-primary  mx-3 text-nowrap" href="{{route('web.idPresentation', $p->id)}}">Más información</a>
                                    <a class="btn btn-primary  mx-3 text-nowrap" href="{{ url()->previous() }}">Volver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection