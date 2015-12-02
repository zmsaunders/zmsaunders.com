<?php

use Illuminate\Database\Seeder;
use ZMS\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Zach S";
        $user->email = "test@example.com";
        $user->password = \Hash::make('password');
        $user->save();
    }
}
