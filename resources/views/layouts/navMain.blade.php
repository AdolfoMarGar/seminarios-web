
<nav class="navbar navbar-expand-sm bg-success d-flex">
    <a class="mx-3 navbar-brand" href="/">Inicio</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="navbar-collapse collapse" id="" style="">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a  class="nav-link" href="{{route('documents.index')}}">Proximo seminario</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="{{route('presentation.index')}}">El seminario</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="{{route('speaker.index')}}">Historico de seminarios</a>
        </li>
      </ul>

      <a class="mx-3 navbar-brand" href="/admin/seminar">Admin</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
  </nav>
</br>