
@extends("layouts.mainLayout")

@section("content")
<div class="mx-4">
    <table class="table border-0">
        <tr>
            <td>
                <h2>Histórico de seminarios</h2>

            </td>
            <td>
                Buscador(prox.)
            </td>
            
        </tr>
    </table>
    @foreach ($seminarList as $seminar)
        <div class="card mb-4 mx-auto" style="background-color:#99ca95; max-width: 850px;" >
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$seminar->location}}, {{$seminar->year}}</h5>
                        <p class="card-text mb-3">Este fue organizado por {{$seminar->hosts}}</p>
                        <div class="d-flex justify-content-between">
                                <a class="btn btn-primary mx-3 text-nowrap" href="{{route('web.idSeminar', $seminar->id)}}">Libro de actas</a>

                                <a class="btn btn-primary  mx-3 text-nowrap"  href="{{route('web.idSeminar', $seminar->id)}}">Libro de resumenes</a>

                                <a class="btn btn-primary  mx-3 text-nowrap" href="{{route('web.idSeminar', $seminar->id)}}">Contenido audiovisual</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection