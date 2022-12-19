<html>
     <head>
        <title>@yield('title')</title>
     </head>
     <body>
        @section('sidebar')
            Este es mi master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
     </body>
  </html>
