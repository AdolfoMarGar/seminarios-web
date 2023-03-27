
@extends("layouts.adminLayout")

@section("title", "Inserción de userios")

@section("header", "Inserción de userios")

@section("content")

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto mb-4">
            <div class="section-title text-center ">
                <br>
                <h1 class="top-c-sep"><u>Nuevo Usuario</u></h1>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-lg-10 mx-auto">
            <div class="filter-result">    
                <div class="job-box  align-items-center justify-content-between mb-30 second-color">
                    <div class="job-left my-4  align-items-center flex-wrap">
                        <div>  
                            <table class="table table-bordered table-striped">
                                @isset($user)
                                    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
                                    @method("PUT")
                                @else
                                    <form action="{{ route('user.store') }}" method="POST">
                                @endisset
                                    @csrf
                                    <tr>
                                        <th scope="col">Tipo de usuario:</th>
                                        <td>
                                            <select class="form-select first-color" aria-label="Default select example" name="type">
                                                @isset($user)
                                                    @if ($user->type==1)
                                                        <option selected value="1">Administrador</option>
                                                        <option value="2">Basico</option>
                                                    @else
                                                        <option value="1">Administrador</option>
                                                        <option selected value="2">Basico</option>
                                                    @endif
                                                @else
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Basico</option>
                                                @endisset
                                                    
                                            </select>
                                        </td>
                                    </tr>
                        
                                    <tr>
                                        <th scope="col">Email:</th>
                                        <td>
                                            <input name="email" type="email" class="form-control first-color" type="text" placeholder="Ej. adolfo@gmail.com" aria-label="default input example" value="{{$user->email ?? '' }}" required>
                                        </td>
                                    </tr>
                        
                                    <tr>
                                        <th scope="col">Contraseña:</th>
                                        <td>
                                            <input name="password" class="form-control first-color" type="text" placeholder="Ej. miContraseña_13" aria-label="default input example" value="{{$user->password ?? '' }}" required>
                                        </td>
                                    </tr>
                        
                        
                                    <tr>
                                        <th scope="col">Nombre:</th>
                                        <td>
                                            <input name="realname" class="inputdisabled form-control first-color" type="text" placeholder="Ej. Juan" aria-label="default input example" value="{{$user->userdata->realname ?? '' }}" required disabled>
                                        </td>
                                    </tr>
                        
                                    <tr>
                                        <th scope="col">Apellidos:</th>
                                        <td>
                                            <input name="lastname" class="inputdisabled form-control first-color" type="text" placeholder="Ej. Gómiz" aria-label="default input example" value="{{$user->userdata->lastname ?? '' }}" required disabled>
                                        </td>
                                    </tr>
                        
                                    <tr>
                                        <th scope="col">Provincia:</th>
                                        <td>
                                            <input name="region" class="inputdisabled form-control first-color" type="text" placeholder="Ej. A Coruña" aria-label="default input example" value="{{$user->userdata->region ?? '' }}" required disabled>
                                        </td>
                                    </tr>
                        
                                    <tr>
                                        <th scope="col">Entidad:</th>
                                        <td>
                                            <input name="entity" class="inputdisabled form-control first-color" type="text" placeholder="Ej. I.F.A.P.A" aria-label="default input example" value="{{$user->userdata->entity ?? '' }}" required disabled> 
                                        </td>
                                    </tr>
                        
                                    <tr>
                                        <td scope="col" colspan="2">
                                            <input  class="btn third-color  text-nowrap" type="submit">
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

<script>
    $(document).ready(function(){
        $('select').change(function(){
            if($(this).val() == 1){
                disableInputs();
            }else{
                enableInputs();
            }
        });
        function disableInputs() {
            $(".inputdisabled").prop("disabled", true);
        }
        function enableInputs() {
            $(".inputdisabled").prop("disabled", false);

        }
    });
</script>

@endsection