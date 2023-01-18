<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('userdatas')->insert([
            'email' => 'asdfol@gmail.com',
            'realname' => 'Juan',
            'lastname' => 'Gomiz',
            'region' => 'Badajoz',
        ]);
        DB::table('userdatas')->insert([
            'email' => 'yguasdop@gmail.com',
            'realname' => 'Maria',
            'lastname' => 'Fuet',
            'region' => 'Toledo',
        ]);
    }
}
