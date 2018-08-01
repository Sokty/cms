@extends('main')
@section('title','| Home')
@section('content')
        <div class = "container"> <!-- Start Container -->
      
              <div class="row">
                  <div class="col-md-12">
                      <div class="jumbotron">
                          <h1 class="display-4">Hello</h1>
                          <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                          <hr class="my-4">
                          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                      </div>
                  </div>
              </div>
          

              <div class="row">
                  <div class = "col-md-8">
                      @foreach ($posts as $post)
                        <div class="post">
                            <h3>{{$post->title}}</h3>
                            <p>{{substr($post->body,0,300)}} {{strlen($post->body) > 300 ? "..." : "" }}</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                      @endforeach
                  </div>
                  <div class="col-md-4">
                       <h3> This side Bar</h3>
                  </div>
              </div>
        </div><!--End Container   -->
@endsection       
    