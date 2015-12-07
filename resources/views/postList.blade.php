@extends('templates.main')

@section('content')
    <div class="postList">
        <div class="hero">
            <span>&lt;<h1>blog</h1>/&gt;</span>
        </div>
        <div class="container">
            @foreach($posts as $post)
                <div class="post">
                <h2><a href="{{URL::action('BlogController@entry', $post->slug)}}">{{$post->title}}</a></h2>
                <span class="info">{{$post->user->name}} on {{date('M d, Y', strtotime($post->created_at))}}</span>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Pagination --}}
    @if($posts->perPage() < $posts->total())
        <div class="pages container">
        @if($posts->currentPage() !== 1)
            <a class="prev" href="{{ $posts->previousPageUrl() }}"><button><i class="fa fa-angle-left"></i> Previous</button></a>
        @endif
        @if($posts->currentPage() != $posts->lastPage())
            <a class="next" href="{{ $posts->nextPageUrl() }}"><button>Next <i class="fa fa-angle-right"></i></button></a>
        @endif
        </div>
    @endif
@stop