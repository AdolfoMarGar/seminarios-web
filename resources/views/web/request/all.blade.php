
@extends("layouts.mainLayout")

@section("content")
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Mis peticiones</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-9 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 third-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>  
                            <table class="table table-xl table-striped ">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Seminario</th>
                                        <th scope="col">Ponencia</th>
                                        <th scope="col">Ponentes</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $cont = 1;
                                    @endphp
                                    @foreach ($requestList as $myrequest)
                                        <tr scope="row">
                                            <th scope="row">{{$cont}}</td>
                                                <td>{{$myrequest->text}}</td>
                                                <td>{{$myrequest->document->seminar->location}}, {{$myrequest->document->seminar->year}}</td>
                                                @if (isset($myrequest->document->presentation))
                                                    <td>{{$myrequest->document->presentation->subject}}</td> 
                                                @else
                                                    <td>Ninguna</td>
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
                                                <td>
                                                    <form action = "{{route('request.destroy', $myrequest->id)}}" method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <input  class="btn btn-primary" type="submit" value="Borrar">
                                                    </form>
                                                </td>
                                        </tr> 
                                        @php
                                            $cont = $cont+1;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>


    

@endsection