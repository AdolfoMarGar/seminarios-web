
@extends("layouts.adminLayout")

@section("title", "Inserción de speaker")

@section("header", "Inserción de speaker")

@section("content")
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Nuevo Ponente</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-10 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 second-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>     
                            <table class="table table-bordered table-striped myBorderColor">
                                @isset($speaker)
                                    <form action="{{ route('speaker.update', ['speaker' => $speaker->id]) }}" method="POST">
                                    @method("PUT")
                                @else
                                    <form action="{{ route('speaker.store') }}" method="POST">
                                @endisset
                                    @csrf
                                    <tr>
                                        <th scope="col">Nombre:</th>
                                        <td>
                                            <input name="name" class="form-control first-color" type="text" placeholder="Ej. Juani" aria-label="default input example" value="{{$speaker->name ?? '' }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Apellidos:</th>
                                        <td>
                                            <input name="lastname" class="form-control first-color" type="text" placeholder="Ej. Ramírez" aria-label="default input example" value="{{$speaker->lastname ?? '' }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Provincia:</th>
                                        <td>
                                            <input name="region" class="form-control first-color" type="text" placeholder="Ej. Badajoz" aria-label="default input example" value="{{$speaker->region ?? '' }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="col" colspan="2">
                                            <input  class="btn third-color  text-nowrap" type="submit">
                                            <a class="btn third-color mx-2 text-nowrap" href="{{ url()->previous() }}">Volver</a>                                        </td>
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