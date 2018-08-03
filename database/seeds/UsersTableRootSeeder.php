<?php

use Illuminate\Database\Seeder;

class UsersTableRootSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'Root Sahum',
            'email' => 'root@sahum.gob.ve',
            'password' => bcrypt(env('ADMIN_PWD', '123456')),
            'type' => 'admin',
            'remember_token' => str_random(10),
        ]);
    }
}