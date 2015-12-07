@extends('templates.main')

@section('content')
    <div class="postContent">
        <div class="heroSmall">
            <div class="container">
                <h1>{{$post->title}}</h1>
                <span class="info">{{$post->user->name}} on {{date('M d, Y', strtotime($post->created_at))}}</span>
            </div>
        </div>
        <div class="container copy">
            {!! $parser->transform($post->text) !!}
        </div>
    </div>
@stop