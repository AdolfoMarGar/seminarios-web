
@extends("layouts.mainLayout")

@section("content")

    <div class="container-fluid">
        <div class="mx-4">
            <div class="row">
                <div class="col-lg-10 mx-auto mb-4">
                <div class="section-title text-center ">
                    <br>
                    <h1 class="top-c-sep"><u>{{$seminar->location}}, {{$seminar->year}}</u></h1>
                </div>
            </div>
        </div>
            <div class="card mb-4 mx-auto pb-4 third-color" style=" max-width: 850px;" >
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title text-center">Libro de actas</h5>
                        </div>
                        <div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding ">
                            <div 
                            class="responsive-wrapper mx-4 responsive-wrapper-wxh-572x612" 
                            style="-webkit-overflow-scrolling: touch; overflow: auto;"
                            >
                            <iframe src="{{url($acta)}}"> 
                            </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection