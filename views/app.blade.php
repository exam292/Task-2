
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
                <div class="content" style="padding: 30px;">
                            <div class="container-fluid overflow-hidden">
                                <div class="row gx-5">
                                    <div class="col shadow p-3 mb-5 bg-light">
                                        <p>egg</p>
                                    </div>
                                </div>
                                <div class="row gx-5">
                                    <div class="col">
                                        <div class="p-3 border bg-light">@yield('content')</div>
                                    </div>
                                    <div class="col">
                                        <div class="p-3 border bg-light">@yield('content')</div>
                                    </div>
                                    <div class="col">
                                        <div class="p-3 border bg-light">@yield('content')</div>
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