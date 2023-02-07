
@extends("layouts.adminLayout")

@section("title", "Inserción de presentation")

@section("header", "Inserción de presentation")

@section("content")
<div class="mx-4">
    <table class="table table-bordered table-striped">

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
                    <input name="subject" class="form-control" type="text" placeholder="Ej. Fitosanitarios ecologicos para huerta." aria-label="default input example" value="{{$presentation->subject ?? '' }}">
                </td>
            </tr>
            <tr>
                <th scope="col">Seminario:</th>
                <td>
                    <select name="seminar_id" class="form-select" aria-label="multiple select example">
                        @foreach($seminarList as $s)
                            <option  
                            @isset($presentation)
                                @if ($presentation->seminar_id==$s->id)
                                    selected 
                                @endif 
                            @endisset
                            
                            value="{{$s->id}}">{{$s->year}}, {{$s->location}}</option>
                        @endforeach
                    </select>   
                </td>         
            </tr>
           
            <tr>
                <th scope="col">Ponentes:</th>
                <td>
                    <select class="form-select" multiple aria-label="multiple select example" name="speaker_id[]">
                        @foreach($speakerList as $s)
                        <option  
                            @isset($presentation)
                                @if ($presentation->speaker_id==$s->id)
                                        selected 
                                @endif 
                            @endisset
                            value="{{$s->id}}">{{$s->lastname}}, {{$s->name}}</option>
                        @endforeach
                    </select> 
                </td>         
            </tr>
           
            <tr>
                <td scope="col" colspan="2">
                    <input  class="btn btn-primary" type="submit">
                </td>
            </tr>
        </form>
    </table>
</div>
@endsection