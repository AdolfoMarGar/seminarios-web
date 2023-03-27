
<nav class="navbar navbar-expand-lg fourth-color d-flex">
  <div class="container-fluid">
    <a class="mx-3 navbar-brand" href="/" style="font-size:x-large"> 
      <img src="{{url('PERMANENT/logoindex.jpg')}}" style="height: 50px;"/> 
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse "  id="nav" style="font-size:x-large">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item">
            <a  class="nav-link textNavColor" href="{{route('seminar.index')}}">Seminarios</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link textNavColor" href="{{route('presentation.index')}}">Ponencia</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link textNavColor" href="{{route('speaker.index')}}">Ponentes</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link textNavColor" href="{{route('documents.index')}}">Documentos</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link textNavColor" href="{{route('request.index')}}">Aportes</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link textNavColor" href="{{route('user.index')}}">Usuarios</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
</br>