@extends('main') {{-- extends from main template--}}
@section('title' | 'View Post')

@section('content')
  <div class ="row">
      <div class="col-md-8">
        <h3>{{$post -> title}}</h3>
        {{--actually , we can the message here, but we may want to show it in all the page, so we put it in main file--}}
        <p class="strong">{{$post -> body}}</p>
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
                      {!!Html::linkRoute('posts.edit', 'Edit', array($post->id ),array('class'=>'btn btn-primary btn-block'))!!}
                      {{-- <a href="#" class="btn btn-primary btn-block">Edit</a> --}}
                  </div>
                  <div class="col-sm-6">
                      {!!Html::linkRoute('posts.destroy','Delete',array($post->id),array('class'=>'btn btn-danger btn-block')) !!}
                  </div>
              </div>

          </div>
      </div>






  </div


@endsection
