@extends('main')
@section('title','| Edit Post')
@section('content')

  <div class ="row">
    
      <div class="col-md-8">
        {{-- create a form post model , controller posts.upate with post id , method is PUT --}}
        {!! Form::model($post,['route' => ['posts.update',$post->id],'method' => 'PATCH'])!!}
        {{Form::label('title','Title:')}}
        {{Form::text('title',null,['class' => 'form-control'])}}
        {{Form::label('body','Body:')}}
        {{Form::textarea('body',null,['class' => 'form-control'])}}
      </div>
     <div class="col-md-4">
          <div class="well">
              <dl class="dl-horizontal">
                  <dt>Create At:</dt>
                  <dd>{{date('M j, Y h:ia',strtotime($post->created_at))}}</dd>
              </dl>
              <dl class="dl-horizontal">
                  <dt>Last Update:</dt>
                  <dd>{{date('M j, Y h:ia',strtotime($post->updated_at))}}</dd>
              </dl>
              <hr>
              <div class="row">
                  <div class="col-sm-6">
                      {!!Html::linkRoute('posts.show', 'Cancel', array($post->id ),array('class'=>'btn btn-info btn-block'))!!}
                      {{-- <a href="#" class="btn btn-primary btn-block">Edit</a> --}}
                  </div>
                  <div class="col-sm-6">
                      {{Form::submit('Save Changes',['class' => 'btn btn-success btn-block'])}}
                      {{-- this below one doesn't submit the form --}}
                     {{--  {!!Html::linkRoute('posts.update','Update',array($post->id),array('class'=>'btn btn-success btn-block')) !!} --}}
                  </div>
              </div>

          </div>
      </div>
  </div>


@endsection