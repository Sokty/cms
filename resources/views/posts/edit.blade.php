@extends('main')
@section('title','| Edit Post')
@section('content')
	@section('content')
  <div class ="row">
      <div class="col-md-8">
      	{!!Form::model($post,['route' => ['posts.update','$post->id']])!!}
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
                      {!!Html::linkRoute('posts.index', 'Cancel', array($post->id ),array('class'=>'btn btn-light btn-block'))!!}
                      {{-- <a href="#" class="btn btn-primary btn-block">Edit</a> --}}
                  </div>
                  <div class="col-sm-6">
                      {!!Html::linkRoute('posts.update','Save',array($post->id),array('class'=>'btn btn-success btn-block')) !!}
                  </div>
              </div>

          </div>
      </div>






  </div
@stop