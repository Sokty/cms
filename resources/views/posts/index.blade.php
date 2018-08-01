
@extends('main')
@section('title','| All posts')
@section('content')
  <div class="row">
    <div class="col-md-9">
        <h1>All Posts</h1>
    </div>
    <div class="col-md-3">
        <a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-primary">Create a New Post</a>
    </div>
    <hr>

  </div>
  <div class="row">
    <div class="col-sm-12">
      <table class="table">
          <thead>
              <th>#</th>
              <th>Title</th>
              <th>Body</th>
              <th>Created At</th>
              <th>Action</th>
        
          </thead>
          <tbody>
                @foreach($posts as $post)
                    <tr>
                      <td><b>{{$post->id}}</b></td>
                      <td>{{substr($post->title,0,20)}}{{strlen($post->title)>20 ? "..." : ""}}</td>
                      <td>{{substr($post->body,0,50)}}{{strlen($post->body)>50 ? "..." : ""}}</td>
                      <td>{{date('M j Y h:iA',strtotime($post->created_at))}}</td>
                      <td>
                        {{-- go to resource controller posts.show/id --}}
                        <a href="{{route('posts.show',$post->id)}}" class="btn btn-default btn-sm">View</a> 
                        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        {{-- {!!Form::open(['route' => ['posts.destroy',$post->id],'method' => 'DELETE'])!!}
                            {{Form::submit('Delet',['class' => 'btn btn-danger btn-sm'])}}
                        {!!Form::close()!!} --}}
                      </td>
                      

                    </tr>
                @endforeach 
          </tbody>
      </table>

      {{-- paginate links --}}
      <div class="text-center">
        {!!$posts->links();!!}
      </div>
      
    </div>  
  </div>

@stop
