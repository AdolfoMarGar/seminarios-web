
@extends("layouts.adminLayout")

@section("title", "Inserción de presentation")

@section("header", "Inserción de presentation")

@section("content")
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Nueva Ponencia</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-10 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 second-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>     
                            <table class="table table-bordered  table-striped myBorderColor">

                                @isset($presentation)
                                    <form action="{{ route('presentation.update', ['presentation' => $presentation->id]) }}" method="POST">
                                    @method("PUT")
                                @else
                                    <form action="{{ route('presentation.store') }}" method="POST">
                                @endisset
                                    @csrf
                                    <tr>
                                        <th scope="col">Tema:</th>
                                        <td>
                                            <input required  name="subject" class="form-control first-color" type="text" placeholder="Ej. Fitosanitarios." aria-label="default input example" value="{{$presentation->subject ?? '' }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Titulo:</th>
                                        <td>
                                            <input required  name="title" class="form-control first-color" type="text" placeholder="Ej. Fitosanitarios ecologicos para huerta." aria-label="default input example" value="{{$presentation->title ?? '' }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Palabras clave:</th>
                                        <td>
                                            <input required  name="keywords" class="form-control first-color" type="text" placeholder="Ej. Invernadero, subtropica, etc..." aria-label="default input example" value="{{$presentation->keywords ?? '' }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Seminario:</th>
                                        <td>
                                            <select name="seminar_id" class="form-select first-color" aria-label="multiple select example">
                                                @foreach($seminarList as $s)
                                                    <option  
                                                    @isset($presentation)
                                                        @if ($presentation->seminar_id==$s->id)
                                                            selected 
                                                        @endif 
                                                    @endisset
                                                    
                                                    value="{{$s->id}}">{{$s->year}}. {{$s->location}}</option>
                                                @endforeach
                                            </select>   
                                        </td>         
                                    </tr>
                                   
                                    <tr>
                                        <th scope="col">Ponentes:</th>
                                        <td>
                                            <select class="form-select first-color" multiple aria-label="multiple select example" name="speaker_id[]" required>
                                                @foreach($speakerList as $s)
                                                    <option  
                                                        @isset($presentation)
                                                            @if ($presentation->speaker_id==$s->id)
                                                                selected 
                                                            @endif 
                                                        @endisset
                                                        value="{{$s->id}}">{{$s->lastname}}, {{$s->name}}
                                                    </option>
                                                @endforeach
                                            </select>                                            
                                        </td>         
                                    </tr>
                                   
                                    <tr>
                                        <td scope="col" colspan="3">
                                            <input required   class="btn third-color  text-nowrap" type="submit">
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