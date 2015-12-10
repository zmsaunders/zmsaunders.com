<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostFlags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function($table) {
            $table->boolean('public')->default(true);
        });

        Schema::create('tags', function($table) {
            $table->increments('id');
            $table->string('tag')->index();
        });

        Schema::create('post_tag', function($table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned();
            $table->integer('tag_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('posts', function($table) {
            $table->dropColumn('public');
        });

         Schema::drop('post_tag');
         Schema::drop('tags');
    }
}
