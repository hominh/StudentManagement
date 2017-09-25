<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            ['name' => 'moderator','password'=>bcrypt('123456'),'email' => 'moderator@gmail.com','remember_token' => str_random(10),'active' => 1,'role_id'=>2],
        ]);
    }
}
