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
            'name' => 'Root',
            'last_name' => 'Sahum',
            'email' => 'root@sahum.gob.ve2',
            'password' => bcrypt(env('ADMIN_PWD', '123456')),
            'type' => 'admin',
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Root',
            'last_name' => 'Sahum',
            'email' => 'root@sahum.gob.ve3',
            'password' => bcrypt(env('ADMIN_PWD', '123456')),
            'type' => 'admin',
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Root',
            'last_name' => 'Sahum',
            'email' => 'root@sahum.gob.ve4',
            'password' => bcrypt(env('ADMIN_PWD', '123456')),
            'type' => 'admin',
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Root',
            'last_name' => 'Sahum',
            'email' => 'root@sahum.gob.ve5',
            'password' => bcrypt(env('ADMIN_PWD', '123456')),
            'type' => 'admin',
            'remember_token' => str_random(10),
        ]);
    }
}