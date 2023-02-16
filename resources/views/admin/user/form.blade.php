
@extends("layouts.adminLayout")

@section("title", "Inserción de userios")

@section("header", "Inserción de userios")

@section("content")
<div class="mx-4">
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
                    <select class="form-select" aria-label="Default select example" name="type">
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
                <th scope="col">Nombre del usuario:</th>
                <td>
                    <input name="username" class="form-control" type="text" placeholder="Ej. Piratilla_88" aria-label="default input example" value="{{$user->username ?? '' }}">
                </td>
            </tr>

            <tr>
                <th scope="col">Contraseña:</th>
                <td>
                    <input name="password" class="form-control" type="text" placeholder="Ej. miContraseña_13" aria-label="default input example" value="{{$user->password ?? '' }}">
                </td>
            </tr>

            <tr>
                <th scope="col">Email:</th>
                <td>
                    <input name="email" class="form-control" type="text" placeholder="Ej. miContraseña_13" aria-label="default input example" value="{{$user->userdata->email ?? '' }}">
                </td>
            </tr>

            <tr>
                <th scope="col">Nombre:</th>
                <td>
                    <input name="realname" class="form-control" type="text" placeholder="Ej. Juan" aria-label="default input example" value="{{$user->userdata->realname ?? '' }}">
                </td>
            </tr>

            <tr>
                <th scope="col">Apellidos:</th>
                <td>
                    <input name="lastname" class="form-control" type="text" placeholder="Ej. Gómiz" aria-label="default input example" value="{{$user->userdata->lastname ?? '' }}">
                </td>
            </tr>

            <tr>
                <th scope="col">Provincia:</th>
                <td>
                    <input name="region" class="form-control" type="text" placeholder="Ej. A Coruña" aria-label="default input example" value="{{$user->userdata->region ?? '' }}">
                </td>
            </tr>

            <tr>
                <th scope="col">Entidad:</th>
                <td>
                    <input name="entity" class="form-control" type="text" placeholder="Ej. I.F.A.P.A" aria-label="default input example" value="{{$user->userdata->entity ?? '' }}">
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