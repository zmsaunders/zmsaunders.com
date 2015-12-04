@extends('templates.admin')

@section('content')

	<div class="container copy">
		<div id="posts">
		<h2>Posts</h2>
		<a href="{{URL::action('Admin\PostController@newForm')}}" class="button">
			<button>New Post</button>
		</a>
		@foreach($posts as $post)
			<div class="post">
				<h3>
					<a href="{{ URL::action('Admin\PostController@editForm', $post->id) }}">{{$post->title}}</a>
				</h3>
				<small>By {{$post->user->name}} on {{ date('M d, Y', strtotime($post->created_at))}}</small>
			</div>
		@endforeach
		</div>
	</div>
@stop