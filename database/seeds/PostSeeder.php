<?php

use Illuminate\Database\Seeder;
use ZMS\Tag;
use ZMS\Post;

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
        factory(ZMS\Tag::class, 20)->create();

        $tags = Tag::lists('id');

        foreach($tags as $tag) {
            $post = factory(ZMS\Post::class)->create();
            $tagModel = Tag::find($tag);
            $post->tags()->save($tagModel);
        }
    }
}
