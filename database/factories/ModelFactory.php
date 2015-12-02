<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(ZMS\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(ZMS\Post::class, function (Faker\Generator $faker) use ($factory) {
	return [
		'title' => $faker->sentence(rand(1,10)),
		'text' => implode("\n\n", $faker->paragraphs(rand(1,10))),
		'user_id' => $factory->create('ZMS\User')->id,
	];
});