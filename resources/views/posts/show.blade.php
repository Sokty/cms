@extends('main') {{-- extends from main template--}}
@section('title' | 'View Post')

@section('content')
  
    {{--actually , we can the message here, but we may want to show it in all the page, so we put it in main file--}}
    <p class="strong">This is the post</p>
@endsection
