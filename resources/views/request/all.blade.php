
@extends("layouts.master")

@section("title", "Administración de seminario")

@section("header", "Administración de seminario")

@section("content")
    <a href="{{ route('request.create') }}">Nuevo</a>
    <table border='1'>
    @foreach ($myrequestList as $myrequest)
        <tr>
            <td>{{$myrequest->id}}</td>

            <td>{{$myrequest->text}}</td>
            <td>{{$myrequest->document->seminar->year}}</td>
            @if (isset($myrequest->document->presentation))
                <td>{{$myrequest->document->presentation->subject}}</td> 
            @else
                <td></td>
            @endif
            <td>
                @switch($myrequest->type)
                    @case(1)
                        PDF
                        @break
                    @case(2)
                        PPT
                        @break
                    @case(3)
                        Photo
                        @break
                    @default
                        
                @endswitch
            </td>
            <td>{{$myrequest->user->username}}</td>

            <td>
                <a href="{{route('request.edit', $myrequest->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('request.destroy', $myrequest->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection