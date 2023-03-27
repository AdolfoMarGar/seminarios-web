<!-- Navbar -->
<nav class="navbar navbar-expand-lg  fourth-color" style="font-size:x-large">
  <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler textNavColor"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            toogle
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" >
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="/">
                <img
                src="{{url('PERMANENT/logoindex.jpg')}}"
                height="50"
                alt="Logo web"
                loading="lazy"
                />
            </a>
        
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown" id="seminarDropdown">
                    <a
                        class="nav-link dropdown-toggle textNavColor"  
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Archivo del seminario
                    </a>
                    <ul class="dropdown-menu fourth-color" id="seminarList" style="font-size:x-large">
                        <li>
                            <a class="dropdown-item textNavColor" href="/seminars">Histórico de seminarios</a>
                        </li>
                        <li>
                            <a class="dropdown-item textNavColor" href="/presentations">Ponencias</a>
                        </li>
                        <li>
                            <a class="dropdown-item textNavColor" href="/multimedia">Contenido multimedia</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-4 textNavColor" href="/nextSeminar">Próximo seminario</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link mx-4 textNavColor" href="/history">Nuestra historia</a>
                </li>
                @if (auth()->check())
                    <li class="nav-item">
                    <a class="nav-link mx-4 textNavColor" href="/myrequest">Aportes</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link mx-4 textNavColor" href="/aboutUs">Contáctanos</a>
                </li>
                
            </ul>
            <!-- Left links -->

            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Login -->
                <div class="dropdown textNavColor" id="login">
                    <a
                        class="text-reset me-5 dropdown-toggle hidden-arrow "
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                    @if (!auth()->check())
                        Acceso            
                    @else
                        Hola {{auth()->user()->userdata->realname??'Admin'}}
                    @endif
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end fourth-color "
                        aria-labelledby="navbarDropdownMenuLink"
                        id="loginList"
                        style="font-size:x-large"
                    >
                        @if (!auth()->check())
                            <li>
                                <a class="dropdown-item textNavColor" href="/login">Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item textNavColor" href="/register">Registrarse</a>
                            </li>
                        @else
                            
                            <li>
                                <a class="dropdown-item textNavColor" href="/profile">Perfil</a>
                            </li>
                            <li>
                                @if (auth()->user()->type==1)
                                    <a class="dropdown-item textNavColor" href="/admin">Admin panel</a>
                                @endif
                            </li>
                            <li>
                                <a 
                                    class="dropdown-item textNavColor"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                >
                                    Logout
                                </a>
                            </li>

                        @endif
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
      
            </div>
        <!-- Right elements -->
        </div>
    </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<script>
  
  $(document).ready(function () {
    $("div#login").click(function() {
      $("#loginList").toggleClass("show");
    });
    $("div#login").mouseleave(function() {
      $("#loginList").removeClass("show");
    });
  });

  $(document).ready(function () {
    $("li#seminarDropdown").click(function() {
      $("#seminarList").toggleClass("show");
    });
    $("li#seminarDropdown").mouseleave(function() {
      $("#seminarList").removeClass("show");
    });
  });
</script>