
@extends("layouts.mainLayout")

@section("content")
<style>
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .bg-image {
        background-image: url('{{ asset('PERMANENT/indexImage.png') }}');
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100%;
        overflow: hidden;
        min-height: 80vh;

    }
    .my-element {
      background-image: url('{{ asset('PERMANENT/indexImage.png') }}');
      background-size: cover;
      background-position: center;
      min-height: 150vh;
      overflow-y: auto;
    }
  </style>
  
  <div class="bg-image">
    <h1>My Element</h1>
    <p>Some content goes here</p>
  </div> 
@endsection