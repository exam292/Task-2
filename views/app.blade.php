
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
                <span class="align-middle">
                <div class="content">
                            <div class="container">
                                <div class="row gx-5 justify-content-center">
                                    <div class="col-4 shadow p-3 mb-5 bg-light">
                                        @yield('content2')
                                    </div>
                                </div>
                                <div class="row gx-3 justify-content-evenly">
                                    <div class="col-3">
                                        <div class="p-3 border bg-light shadow">@yield('content')</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="p-3 border bg-light shadow">@yield('')</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="p-3 border bg-light shadow">@yield('')</div>
                                    </div>
                                </div>
                            </div>                           
                </div>
                </span>
                <footer>
                  @include('footer')  
                </footer>
            </div>
        </body>
    </html>