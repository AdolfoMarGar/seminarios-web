
@extends("layouts.mainLayout")

@section("content")
<div class="mx-4">
    <table class="table border-0">
        <tr>
            <td>
                <h2>Historico de ponencias</h2>

            </td>
            <td>
                Buscador(prox.)
            </td>
        </tr>
    </table>
    @for($i=0; $i<count($yearList); $i++)
        <div class="row">
            <div class="col">
                <h1 class="text-center mx-auto">{{$yearList[$i]->location}}, {{$yearList[$i]->year}}</h1>
                @foreach ($presentationList as $pre)
                    @if ($pre->seminar->year==$yearList[$i]->year)
                        <div class="card mb-4 mx-auto" style="background-color:#99ca95; max-width: 850px;" >
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">{{$pre->subject}}</h5>
                                        <p class="card-text mb-3">Titulo: {{$pre->title}}</p>
                                        <div class="d-flex justify-content-between">
                                                <a class="btn btn-primary mx-3 text-nowrap" href="{{route('web.idPresentation', $pre->id)}}">Ver</a>
                
                                                <a class="btn btn-primary  mx-3 text-nowrap"  href="/">Descargar archivos</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    
                @endforeach
                
            </div>
        </div>
        
    @endfor
    
</div>

@endsection