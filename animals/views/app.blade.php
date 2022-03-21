<!doctype html>
    <html>
    <head>
       @include('head')
    </head>
    <body class="mx-auto text-dark">
    <div>
       <header class="row text-center mx-auto">
           @include('header')
       </header>
       <div class="content">
       <div class="row mx-auto align-items-center">
       <div id="main" class="shadow p-3 mb-5 mx-auto bg-light" style="width: auto; height: auto;">
               @yield('content')
        </div>
        </div>
        </div>
</div>
       </div>
       <footer>
           @include('footer')
       </footer>
    </div>
    </body>
    </html>
 