<?php

namespace ZMS\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ZMS\Http\Requests;
use ZMS\Http\Controllers\Controller;
use ZMS\Post;
use \Michelf\MarkdownExtra;

class DashboardController extends Controller
{
    public function index(Post $post, MarkdownExtra $parser)
    {
        $posts = $post->with('user')->get();
        return view('admin.dashboard')
        	->with('posts', $posts)
        	->with('parser', $parser);
    }
}
