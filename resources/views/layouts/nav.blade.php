
<nav class="navbar navbar-expand-sm bg-success d-flex">
    <a class="mx-3 navbar-brand" href="/">Inicio</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExample03" style="">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a  class="nav-link" href="{{route('seminar.index')}}">Seminarios</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link" href="{{route('presentation.index')}}">Presentaciones</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link" href="{{route('speaker.index')}}">Ponentes</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link" href="{{route('documents.index')}}">Documentos</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link" href="{{route('request.index')}}">Peticiones</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link" href="{{route('user.index')}}">Usuarios</a>
        </li>
      </ul>
      
    </div>
  </nav>