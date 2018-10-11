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
            'name' => 'Root',
            'last_name' => 'Sahum',
            'email' => 'root@sahum.gob.ve',
            'password' => bcrypt(env('ADMIN_PWD', '123456')),
            'type' => 'admin',
            'remember_token' => str_random(10),
        ]);

         DB::table('users')->insert([
            'name' => 'Member',
            'last_name' => 'Sahum',
            'email' => 'member@sahum.gob.ve',
            'password' => bcrypt(env('ADMIN_PWD', '123456')),
            'type' => 'member',
            'remember_token' => str_random(10),
        ]);
    }
}