<?php

namespace ZMS\Http\Controllers;

use Illuminate\Http\Request;
use Michelf\MarkdownExtra;

use ZMS\Http\Requests;
use ZMS\Http\Controllers\Controller;
use ZMS\Post;

class BlogController extends Controller
{

    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post
            ->with('user')
            ->where('public', true)
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('postList')
            ->with('title', 'Blog')
            ->with('posts', $posts);
    }

    public function entry(MarkdownExtra $parser, $slug)
    {
        $post = $this->post->where('slug', $slug)->first();

        if ( ! $post) {
            abort(404);
        }

        return view('postView')
            ->with('post', $post)
            ->with('title', $post->title)
            ->with('parser', $parser);
    }

}
