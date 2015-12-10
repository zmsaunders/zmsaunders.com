<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use ZMS\Post;

class BlogTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testMainRoutes()
    {
        $post = Post::first();
        $this->visit('/blog/' . $post->slug)
             ->see($post->title);
    }
}
