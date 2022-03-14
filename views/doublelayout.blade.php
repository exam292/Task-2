
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

                <div class="d-flex justify-content-center text-dark" style="padding-top: 100px;">
                    <div style="padding-right: 100px; padding-top: 100px;">@yield('title')</div>
                    <div class="d-flex p-2">@yield('content')</div>
                    <div class="d-flex p-2">@yield('content2')</div>
                </div>
                <div class="d-flex flex-column-reverse navbar bg-dark text-light fixed-bottom p-2">
                    @include('footer')  
                </div>
            </body>
    </html>