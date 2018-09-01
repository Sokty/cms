@extends('main')
@section('title','| Create New Post')
{{-- add section to this page , because we dont need to load this css to all pages. --}}

@section('stylesheets')
		{!! Html::style('css/parsley.css') !!}    {{-- use html helper to include the css file --}}
@endsection
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create A New Post</h1>
			{!! Form::open(['route' => 'posts.store','data-parsley-validate']) !!}
    			{{Form::label('title','Title:')}}
    			{{Form::text('title',null,array('class' => 'form-control','required')) }}

    			{{Form::label('body','Post Body:')}}
    			{{Form::textarea('body',null,array('class' => 'form-control','required')) }}

    			{{Form::submit('Create Post',array('class' => 'btn btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px'))}}
			{!! Form::close() !!}
		</div>
	</div>
	@section('scripts')
		{!! Html::script('js/parsley.min.js')!!} {{--use html helper to include the javascript file--}}
	@endsection
@endsection
