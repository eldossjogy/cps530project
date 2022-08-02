<?php

namespace Database\Seeders;

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
        DB::table('message')->insert([
            'name' => 'User1',
            'msg' => 'user1@email.com',
        ]);
        DB::table('message')->insert([
            'name' => 'user2',
            'email' => 'user2@email.com',
        ]);
    }
}