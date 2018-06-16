@if (Session::has('success')) {{--check if there is the success message in the flash session--}}
   <div class="alert alert-success">
     <strong>Succss::</strong>
     {{--in laravel , output the value of the session named succes--}}
     {{Session::get('success')}}
   </div>
@endif
