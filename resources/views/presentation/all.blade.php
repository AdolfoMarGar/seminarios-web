
@extends("layouts.master")

@section("title", "Administración de presentation")

@section("header", "Administración de presentation")
@php{{
    $data["presentationList"] = $presentationList;
    $data["seminarList"] = $seminarList;
    $data["speakerList"] = $speakerList;
    
}}@endphp

@section("content")
    <a href="{{ route('presentation.create') }}">Nuevo</a>
    <table border='1'>
    @for($i=0;$i<count($presentationList);$i++)
        <tr>
            <td>{{$presentationList[$i]->id}}</td>

            <td>subject:{{$presentationList[$i]->subject}}</td>
            <td>dir:{{$presentationList[$i]->dir}}</td>
            <td>year:{{$seminarList[$i]}}</td>
            <td>name speaker:{{$speakerList[$i]}}</td>
            <td>
                <a href="{{route('presentation.edit', $presentationList[$i]->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('presentation.destroy', $presentationList[$i]->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        <br>
        {{$presentationList[$i]}}

    @endfor
    </table>
@endsection