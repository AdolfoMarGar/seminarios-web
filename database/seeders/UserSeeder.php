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
            'userdata_id' => '1',
        ]);
        DB::table('users')->insert([
            'type' => '2',
            'username' => 'user2',
            'password' => '215641',
            'userdata_id' => '2',
        ]);
        DB::table('users')->insert([
            'type' => '1',
            'username' => 'root',
            'password' => 'root',
            'userdata_id' => '-1',

        ]);

    }
}
