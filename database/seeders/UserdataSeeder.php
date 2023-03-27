<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDataSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('userdatas')->insert([
            'realname' => 'Juan',
            'lastname' => 'Gomiz',
            'region' => 'Badajoz',
            'entity' => 'Centro investigacion de badajoz',
        ]);
        
    
    }
}
