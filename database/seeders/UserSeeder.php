<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('users')->insert([
            'type' => '2',
            'email' => 'asdfol@gmail.com',
            'password' => Hash::make('12345678'),
            'userdata_id' => '1',
        ]);

        DB::table('users')->insert([
            'type' => '2',
            'email' => 'asfd@zxcv.com',
            'password' =>  Hash::make('87654321'),
            'userdata_id' => '2',
        ]);
        
        DB::table('users')->insert([
            'type' => '1',
            'email' => 'root@root.com',
            'password' =>  Hash::make('root'),
            'userdata_id' => null,

        ]);

    }
}
