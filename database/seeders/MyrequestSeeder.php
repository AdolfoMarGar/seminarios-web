<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyrequestSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('myrequests')->insert([
            'text' => 'Texto 1',
            'type' => '1',            
            'user_id' => '1',
            'document_id' => '1',

        ]);

        DB::table('myrequests')->insert([
            'text' => 'Texto 2',
            'type' => '2',            
            'user_id' => '1',
            'document_id' => '2',

        ]);
    }
}
