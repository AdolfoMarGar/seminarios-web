<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeminarTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('seminars')->insert([
            'year' => '2005',
            'location' => 'Almería',
            'hosts' => 'Cajamar',
        ]);

        DB::table('seminars')->insert([
            'year' => '2006',
            'location' => 'Jaen',
            'hosts' => 'Publifiestas Conde',
        ]);

        DB::table('seminars')->insert([
            'year' => '2012',
            'location' => 'Malaga',
            'hosts' => 'Unicaja',
        ]);

    }
}
