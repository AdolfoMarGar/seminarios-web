<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'type' => '2',
            'username' => 'user1',
            'password' => '2005',
            'email' => 'asdfol@gmail.com',
            'realname' => 'Juan',
            'lastname' => 'Gomiz',
            'region' => 'Badajoz',
        ]);
        DB::table('users')->insert([
            'type' => '2',
            'username' => 'user2',
            'password' => '215641',
            'email' => 'yguasdop@gmail.com',
            'realname' => 'Maria',
            'lastname' => 'Fuet',
            'region' => 'Toledo',
        ]);
        DB::table('users')->insert([
            'type' => '1',
            'username' => 'root',
            'password' => 'root',
            'email' => 'null',
            'realname' => 'null',
            'lastname' => 'null',
            'region' => 'null',
        ]);

    }
}
