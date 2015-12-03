@extends('templates.admin')

@section('content')

	<div id="posts" class="container">
		<h2>Posts</h2>
		@foreach($posts as $post)
			<div class="post">
				<h3>
					<a href="{{ URL::action('Admin\PostController@editForm', $post->id) }}">{{$post->title}}</a>
					<br><small>By {{$post->user->name}} on {{ date('M d, Y', strtotime($post->created_at))}}</small>
				</h3>
				{!! $parser->transform($post->text) !!}
			</div>
		@endforeach

		<a href="{{URL::action('Admin\PostController@newForm')}}" class="button">
			<button>New Post</button>
		</a>
	</div>
@stop