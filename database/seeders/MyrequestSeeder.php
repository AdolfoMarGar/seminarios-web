<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyrequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('myrequests')->insert([
            'text' => 'Texto 1',
            'year' => '2005',
            'type' => '3',
            'dir' => 'asd/favczx/vasd/f',
            'user_id' => '1',
        ]);

        DB::table('myrequests')->insert([
            'text' => 'Texto 2',
            'year' => '2008',
            'type' => '2',
            'dir' => 'asd/favczx/vasd/001',
            'user_id' => '1',

        ]);
        DB::table('myrequests')->insert([
            'text' => 'Texto 3',
            'year' => '2012',
            'type' => '1',
            'dir' => 'asd/favczx/vasd/002',
            'user_id' => '2',

        ]);
        DB::table('myrequests')->insert([
            'text' => 'Texto 4',
            'year' => '2005',
            'type' => '3',
            'dir' => 'asd/favczx/vasd/005',
            'user_id' => '1',

        ]);
    }
}
