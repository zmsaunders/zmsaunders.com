<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testMainRoutes()
    {
        $this->visit('/')
             ->see('about me');

        $this->visit('/blog')
            ->see('blog');
    }
}
