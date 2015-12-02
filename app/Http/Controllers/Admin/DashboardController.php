<?php

namespace ZMS\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ZMS\Http\Requests;
use ZMS\Http\Controllers\Controller;
use ZMS\Post;

class DashboardController extends Controller
{

    public function index(Post $post)
    {
        return $post->get()->toArray();
    }
}
