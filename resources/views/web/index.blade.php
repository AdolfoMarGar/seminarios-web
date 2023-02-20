
@extends("layouts.mainLayout")

@section("content")
<style>
    body, html {
			height: 100%;
			margin: 0;
			padding: 0;
      overflow: hidden;

		}


    div.bg-image {
      height: 100%;
      background-size: 100%;
      background-image: url('{{ asset('PERMANENT/indexImage.jpg') }}');
    }
    footer{
      visibility: hidden;
    }
   
  </style>
<div class="bg-image">
</div>

@endsection