<?php

namespace ZMS\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ZMS\Http\Requests;
use ZMS\Http\Controllers\Controller;
use ZMS\Post;
use \Michelf\MarkdownExtra;

class PostController extends Controller
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function editForm($postID)
    {
        $post = $this->post->find($postID);
        if (! $post) {
            abort(404);
        }

        return view('admin.posts.form')
            ->with('post', $post);
    }

    public function save(BlogPostRequest $request)
    {
        // New post, or old post?
        if ($request->input('id')) {
            $post = $this->post->find($request->input('id'));
        } else {
            $post = $this->post;
        }

        if ( ! $post) {
            abort(404);
        }
    }
}
