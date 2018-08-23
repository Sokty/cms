<!doctype html>
<html lang="en">
<head>
  @include('partial._head') <!-- include partial file , from location : partial/_header -->
</head>
  <body>
        @include('partial._nav') {{--include the navigation from 'partial/_nav'--}}

        <div class = "container" style="margin-top:80px"> <!-- Start Container -->
            {{--actually we can put it in show view if we want the is message to show in only the show view
                but the reason we put it here is that we may want to the show it in every other pages.
            --}}
            @include('partial._messages')
              @yield('content')
              @include('partial._footer')
        </div><!--End Container   -->
        @include('partial._javascript')
        @yield('scripts')
    </body>
</html>
