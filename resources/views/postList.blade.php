@extends('templates.main')

@section('content')
    <div class="container postList">
        <h1>&lt;blog/&gt;</h1>
        @foreach($posts as $post)
            <div class="post">
            <h2><a href="{{URL::action('BlogController@entry', $post->slug)}}">{{$post->title}}</a></h2>
            <span class="info">{{$post->user->name}} on {{date('M d, Y', strtotime($post->created_at))}}</span>
            </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    @if($posts->perPage() < $posts->total())
        <div class="pages container">
        @if($posts->currentPage() !== 1)
            <a class="prev" href="{{ $posts->previousPageUrl() }}"><i class="fa fa-angle-left"></i> Previous</a>
        @endif
        @if($posts->currentPage() != $posts->lastPage())
            <a class="next" href="{{ $posts->nextPageUrl() }}">Next <i class="fa fa-angle-right"></i></a>
        @endif
        </div>
    @endif
@stop