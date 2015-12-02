<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ZMS\User::class, 10)->create();
        factory(ZMS\Post::class, 25)->create();
    }
}
