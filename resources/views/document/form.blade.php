
@extends("layouts.master")

@section("title", "Inserción de documento")

@section("header", "Inserción de documento")

@section("content")
    @isset($document)
        <form action="{{ route('documents.update', ['document' => $document->id]) }}" method="POST">
            {{'updateemos perra' }}<br>
        @method("PUT")
    @else
        <form action="{{ route('documents.storeaaa') }}" method="POST">
            {{'ni del palo' }}<br>

    @endisset
        @csrf
        Type:<input type="text" name="type" value="{{$document->type ?? '' }}"><br>
        Dir:<input type="text" name="dir" value="{{$document->dir ?? '' }}"><br>
        <input type="hidden" name="seminars_id" value="{{$document->seminars_id ?? '' }}"><br>
        <input type="submit">
        </form>
@endsection