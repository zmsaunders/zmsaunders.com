<?php

namespace ZMS\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Michelf\MarkdownExtra;
use Auth;
use ZMS\Http\Controllers\Controller;
use ZMS\Http\Requests;
use ZMS\HTTP\Requests\BlogPostRequest;
use ZMS\Post;

class PostController extends Controller
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function newForm()
    {
        return view('admin.posts.form');
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

        $post->title = $request->input('title');
        $post->text = $request->input('text');
        $post->slug = str_slug($request->input('title'));

        Auth::user()->posts()->save($post);

        return redirect()
            ->action('Admin\DashboardController@index');
    }
}
