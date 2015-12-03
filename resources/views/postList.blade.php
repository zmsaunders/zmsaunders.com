@extends('templates.main')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <h2><a href="#">{{$post->title}}</a></h2>
            <span class="info">{{$post->user->name}} on {{date('M d, Y', strtotime($post->created_at))}}</span>
        @endforeach
    </div>
    {!! $posts->render() !!}
@stop