
@extends("layouts.adminLayout")

@section("title", "Administración de userio")

@section("header", "Administración de userio")

@section("content")
<div class="mx-4">
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tipo</th>
              <th scope="col">Correo</th>
              <th scope="col">Contraseña</th>
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
                    <td>{{$user->password}}</td>
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
                        <a class="btn btn-primary" href="{{route('user.edit', $user->id)}}">Modificar</a></td>
                    <td>
                        <form action = "{{route('user.destroy', $user->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <input class="btn btn-primary" type="submit" value="Borrar">
                        </form>
                    </td>
                </tr>
                @php
                        $cont = $cont+1;
                @endphp 
            @endforeach
            <tr>
                <th scope="col" colspan="9">
                    <a class="btn btn-primary"  href="{{ route('user.create') }}">Insertar usuario</a>
                </th>
            </tr>
        </tbody>
    </table>
<div>
@endsection