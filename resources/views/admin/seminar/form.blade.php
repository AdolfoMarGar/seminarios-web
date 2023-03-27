
@extends("layouts.adminLayout")

@section("title", "Inserción de seminarios")

@section("header", "Inserción de seminarios")

@section("content")

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Nuevo Seminario</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-10 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 second-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>     
                            <table class="table table-bordered table-striped myBorderColor myBorderColor">
                                @isset($seminar)
                                    <form action="{{ route('seminar.update', ['seminar' => $seminar->id]) }}" method="POST">
                                    @method("PUT")
                                @else
                                    <form action="{{ route('seminar.store') }}" method="POST">
                                @endisset
                                    @csrf
                                    <tr>
                                        <th scope="col">Año del seminario:</th>
                                        <td>
                                            <input name="year" class="form-control first-color" type="number" placeholder="Ej. 2000" aria-label="default input example" value="{{$seminar->year ?? '' }}" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Localización:</th>
                                        <td>
                                            <input name="location" class="form-control first-color" type="text" placeholder="Ej. Pulpi, Almeria" aria-label="default input example" value="{{$seminar->location ?? '' }}" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Hosts:</th>
                                        <td>
                                            <input name="hosts" class="form-control first-color" type="text" placeholder="Ej. Empresa S.L." aria-label="default input example" value="{{$seminar->hosts ?? '' }}" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="col" colspan="2">
                                            <input class="btn third-color text-nowrap" type="submit">
                                            <a class="btn third-color mx-2 text-nowrap" href="{{ url()->previous() }}">Volver</a>
                                        </td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection