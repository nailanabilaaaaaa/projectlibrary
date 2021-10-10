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
        \App\Models\User::insert([
            [
              'id'  			=> 1,
              'name'  			=> 'Naila - Admin',
              'username'		=> 'naila_admin',
              'email' 			=> 'naila_admin@gmail.com',
              'password'		=> bcrypt('naila123'),
              'gambar'			=> NULL,
              'level'			=> 'admin',
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 2,
              'name'  			=> 'Naila - User',
              'username'		=> 'naila_user',
              'email' 			=> 'naila_user@gmail.com',
              'password'		=> bcrypt('naila123'),
              'gambar'			=> NULL,
              'level'			=> 'user',
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 3,
              'name'  			=> 'Ervin - Admin',
              'username'		=> 'ervin_admin',
              'email' 			=> 'ervin_admin@gmail.com',
              'password'		=> bcrypt('ervin123'),
              'gambar'			=> NULL,
              'level'			=> 'admin',
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 4,
              'name'  			=> 'Ervin - User',
              'username'		=> 'ervin_user',
              'email' 			=> 'ervin_user@gmail.com',
              'password'		=> bcrypt('ervin123'),
              'gambar'			=> NULL,
              'level'			=> 'user',
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 5,
              'name'  			=> 'Kynan - Admin',
              'username'		=> 'kynan_admin',
              'email' 			=> 'kynan_admin@gmail.com',
              'password'		=> bcrypt('kynan123'),
              'gambar'			=> NULL,
              'level'			=> 'admin',
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 6,
              'name'  			=> 'Kynan - User',
              'username'		=> 'kynan_user',
              'email' 			=> 'kynan_user@gmail.com',
              'password'		=> bcrypt('kynan123'),
              'gambar'			=> NULL,
              'level'			=> 'user',
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]
        ]);
    }
}
