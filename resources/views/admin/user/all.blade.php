
@extends("layouts.adminLayout")

@section("title", "Administración de userio")

@section("header", "Administración de userio")

@section("content")
<script src ="{{url('js/modal.js')}}">
</script>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Usuarios</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-10 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 second-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>  
                            <a class="btn third-color mx-3 text-nowrap " href="{{ route('user.create') }}">Insertar usuario</a>

                            <br>
                            <br>
                                        
                            <table class="table table-striped ">
                                <thead>
                                    <tr >
                                        <th scope="col">#</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Provincia</th>
                                        <th scope="col">Entidad</th>
                                        <th scope="col" colspan="2">Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $cont = 1;
                                    @endphp    
                                    @foreach ($userList as $user)
                                        <tr>
                                            <th scope="row">{{$cont}}</td>
                                            <td>
                                                @if ($user->type==1)
                                                    Admin
                                                @else
                                                    Normal    
                                                @endif
                                            </td>
                                            <td>{{$user->email}}</td>
                                            @if ($user->type==2)
                                                <td>{{$user->userdata->lastname}}, {{$user->userdata->realname}}</td>
                                                <td>{{$user->userdata->region}}</td>
                                                <td>{{$user->userdata->entity}}</td>
                                            @else
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            @endif
                                            
                                            <td>
                                                <a class="btn  third-color mx-3 text-nowrap " href="{{route('user.edit', $user->id)}}">Modificar</a></td>
                                            <td>
                                                <form action = "{{route('user.destroy', $user->id)}}" method="POST" class="botonBorrar" id='botonBorrar{{$user->id}}'>
                                                    @csrf
                                                    @method("DELETE")
                                                    <input class="btn  third-color mx-3 text-nowrap " type="submit" value="Borrar">
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