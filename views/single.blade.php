
<!DOCTYPE html>
    <html>
        <head>
            @include('head')
        </head>
        <body class="mx-auto text-dark">
            <div>
                <header class="row text-center mx-auto">
                    @include('header')
                </header>

                <div class="p-3 border bg-light shadow">@yield('content')</div>


                <footer>
                  @include('footer')  
                </footer>
            </div>
        </body>
    </html>