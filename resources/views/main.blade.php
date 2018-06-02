<!doctype html>
<html lang="en">
<head>
  @include('partial._head') <!-- include partial file , from location : partial/_header -->
</head>
  <body>
        @include('partial._nav')
        
        <div class = "container"> <!-- Start Container -->
              @yield('content')
              @include('partial._footer')           
        </div><!--End Container   -->
        @include('partial._javascript')
  </body>
</html>