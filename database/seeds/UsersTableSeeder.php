<?php

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
         \App\User::insert([
            [
              'id'  			=> 1,
              'name'  			=> 'AdminTesting - Admin',
              'email' 			=> 'admin@testing.com',
              'password'		=> bcrypt('admin123'),
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 2,
              'name'  			=> 'UserTesting - User',
              'email' 			=> 'user@testing.com',
              'password'		=> bcrypt('user123'),
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]
        ]);
    }
}