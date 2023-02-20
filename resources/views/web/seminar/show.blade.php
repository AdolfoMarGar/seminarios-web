
@extends("layouts.mainLayout")

@section("content")
<div class="mx-4">
    <table class="table border-0">
        <tr>
            <td>
                <h2>Historico de seminarios</h2>

            </td>
            <td>
                Buscador(prox.)
            </td>
        </tr>
    </table>
        <div class="card mb-4 mx-auto" style="background-color:#99ca95; max-width: 850px;" >
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$seminar->location}}, {{$seminar->year}}</h5>
                        <p class="card-text mb-3">Este fue organizado por {{$seminar->hosts}}</p>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($presentationList as $p)
            <div class="card mb-4 mx-auto" style="background-color:#99ca95; max-width: 850px;" >
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
                                            echo(",");
                                        }
                                        echo($sp->name." ".$sp->lastname);
                                        
                                        $cont = $cont +1;

                                    }
                                    echo(".");
                                @endphp
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
</div>

@endsection