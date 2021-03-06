@extends('templates.admin')

@section('content')
	<div class="container copy">
		<div class="postForm">
			@if(isset($post))
				{!! Form::model($post) !!}
				<h2>Modify Post</h2>
				{!! Form::hidden('id', $post->id) !!}
			@else
				{!! Form::open() !!}
				<h2>Create Post</h2>
			@endif
				{!! Form::label('title', 'Title') !!}
				{!! Form::text('title') !!}

				{!! Form::label('text', 'Post Body') !!}
				{!! Form::textarea('text') !!}

				{!! Form::label('public', 'Publish Post') !!}
				{!! Form::checkbox('public') !!}

				{!! Form::button('Save', ['type' => 'text']) !!}

				{!! Form::close() !!}
			</div>
	</div>
@stop