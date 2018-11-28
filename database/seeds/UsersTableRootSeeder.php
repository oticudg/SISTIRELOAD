<?php

use Illuminate\Database\Seeder;

class UsersTableRootSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Root',
            'last_name' => 'Sahum',
            'email' => 'root@sahum.gob.ve',
            'password' => bcrypt(env('ADMIN_PWD', 'secret')),
            'type' => 'admin',
            'remember_token' => str_random(10),
        ]);
    }
}