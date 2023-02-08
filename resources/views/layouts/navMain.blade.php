
<nav class="navbar navbar-expand-lg bg-success d-flex">
  <div class="container-fluid">
    <a class="mx-3 navbar-brand" href="/" style="font-size:xx-large">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="navbar-collapse collapse" id="" style="font-size:x-large">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/nextSeminar">Proximo seminario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/aboutUs">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/history">Nuestra historia</a>
        </li>

        <li class="nav-item">
          <div class="dropdown show" id="archivoDropdownMenuLink" >
            <a class="btn dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-size:x-large">
              Archivo del seminario
            </a>
          
            <div class="dropdown-menu" id="archivoDivMenu" aria-labelledby="dropdownMenuLink"  style="font-size:x-large">
              <a class="dropdown-item" href="/seminars">Historico de seminarios</a>
              <a class="dropdown-item" href="/presentations">Ponencias</a>
              <a class="dropdown-item" href="/multimedia">Contenido multimedia</a>
            </div>
          </div>
        </li>
      </ul>

      <a class="mx-3 navbar-brand" href="/admin/seminar">Admin</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
  </div>
  </nav>
</br>


<script>
  $(document).ready(function () {
    $("div.dropdown#seminarDropdownMenuLink").click(function() {
      $("#seminarDivMenu").toggleClass("show");
    });
    $("div.dropdown#seminarDropdownMenuLink").mouseleave(function() {
      $("#seminarDivMenu").removeClass("show");
    });
  });

  $(document).ready(function () {
    $("div.dropdown#archivoDropdownMenuLink").click(function() {
      $("#archivoDivMenu").toggleClass("show");
    });
    $("div.dropdown#archivoDropdownMenuLink").mouseleave(function() {
      $("#archivoDivMenu").removeClass("show");
    });
  });
</script>