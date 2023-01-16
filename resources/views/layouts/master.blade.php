<html>
     <head>
        <title>@yield('title')</title>
     </head>
     <body>
        @section('sidebar')
        <a href="{{route('welcome')}}">Inicio</a></td>

        @show

        <div class="container">
            @yield('content')
        </div>
     </body>
  </html>
