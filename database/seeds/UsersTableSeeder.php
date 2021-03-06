<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class,30)->create();

        $users = [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'email_verified_at' => Carbon::now(),
            'api_token' => Str::random(18),
            'is_admin' => true,
            'created_at' => Carbon::now(),
        ];

        \App\Models\User::insert($users);
    }
}
