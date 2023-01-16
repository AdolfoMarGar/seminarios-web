<html>
     <head>
        <title>@yield('title')</title>
     </head>
     <body>
        @section('sidebar')
        {{view('welcome')}}</br></br>

        @show

        <div class="container">
            @yield('content')
        </div>
     </body>
  </html>
