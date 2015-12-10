<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testMainRoutes()
    {
        $this->artisan('db:seed');

        $this->visit('/')
             ->see('about me');

        $this->visit('/blog')
            ->see('blog');
    }
}
