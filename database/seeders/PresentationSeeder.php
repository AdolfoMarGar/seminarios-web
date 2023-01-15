<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('presentations')->insert([
            'subject' => 'Proximos fitosanitarios para invernadero',
            'dir' => 'null',
            'seminar_id' => '1',
        ]);

        DB::table('presentations')->insert([
            'subject' => 'Tratamientos fertilizantes para suelos insalubres',
            'dir' => 'null',
            'seminar_id' => '2',
        ]);

    }
}
