<!-- Homepage Layout -->

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
    <div class="bg-image shadow" alt="A Sunny Beach"
      style="
      background-image: url('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/beach-quotes-1559667853.jpg');
      height: 6%;
    ">

    <div class="mask 25vh" style="background-color: rgba(0, 0, 0, 0.6); padding: 3%;">
      <div class="d-flex justify-content-center align-items-center">
          <div class="d-flex justify-content-center align-items-center">@yield('gibjohndesc')</div>
      </div>
    </div>

    <div class="d-flex flex-column-reverse navbar bg-dark text-light fixed-bottom p-2">
      @include('footer')  
    </div>

  </body>
</html>

<!-- Homepage Layout -->