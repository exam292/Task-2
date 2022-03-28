<!-- Dashboard Template -->

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
                <div class="d-flex p-3 w-25" style="min-width: 480px;">@yield('content')</div>
                <div class="d-flex p-3 w-25" style="min-width: 480px;">@yield('Leaderboard')</div>
                <div class="d-flex p-3 w-25" style="min-width: 480px;">@yield('Tasks')</div>
                <div class="d-flex p-3 w-25" style="min-width: 480px;">@yield('Courses')</div>
            </div>

        </div>

        <div class="d-flex flex-column-reverse navbar bg-dark text-light fixed-bottom p-2">
            @include('footer')  
        </div>
            
    </body>
</html>

<!-- Dashboard Template -->