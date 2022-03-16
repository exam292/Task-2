
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

            <div class="d-flex flex-wrap">
                <div class="d-flex p-1 border w-25 h-50 flex-wrap">@yield('content')</div>
                <div class="d-flex p-1 border w-25 h-50 flex-wrap">@yield('Leaderboard')</div>
                <div class="d-flex p-1 border w-25 h-50 flex-wrap">@yield('Tasks')</div>
                <div class="d-flex p-1 border w-25 h-50 flex-wrap">@yield('Courses')</div>
                

            </div>
        </div>
            <div class="d-flex flex-column-reverse navbar bg-dark text-light fixed-bottom p-2">
                @include('footer')  
            </div>
            
        </body>
</html>