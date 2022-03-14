
<!DOCTYPE html>
    <html>
        <head>
            @include('head')
        </head>
        <body class="text-dark">
            <div>
                <header class="row text-center mx-auto">
                    @include('header')
                </header>

                <div class="d-flex justify-content-center align-items-center">@yield('gibjohndesc')</div>



                <div class="d-flex flex-column-reverse navbar bg-dark text-light fixed-bottom p-2">
                    @include('footer')  
                </div>
            </body>
    </html>