
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
            <div class="d-flex flex-row flex-wrap">
                <div class="d-flex p-2 border w-auto">@yield('content')</div>
                <div class="d-flex p-2 border w-auto">@yield('content2')</div>
            </div>
            <div class="d-flex flex-row flex-wrap ">
                <div class="d-flex p-2 border w-25">@yield('content2')</div>
                <div class="d-flex p-2 border w-25">@yield('content')</div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="d-flex p-2 border w-25">@yield('content2')</div>
            </div>
        </div>
            <div class="d-flex flex-column-reverse navbar bg-dark text-light fixed-bottom p-2">
                @include('footer')  
            </div>
            
        </body>
</html>