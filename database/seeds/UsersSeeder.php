<?php


use \Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $users = collect(config('seeder.users'));
        $users->each(function ($user) {
            factory('App\User')->create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt($user['password'])
            ]);
        });
    }
}