<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PresentationSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('presentations')->insert([
            'subject' => 'Fitosanitarios',
            'title' => 'Proximos fitosanitarios para invernadero',
            'keywords' => 'Jadrin, Plumero',
            'seminar_id' => '1',
        ]);
        DB::table('presentations')->insert([
            'subject' => 'asdf',
            'title' => 'Proximos asdf para invernadero',
            'keywords' => 'Jadrin, Plumero',
            'seminar_id' => '1',
        ]);
        DB::table('presentations')->insert([
            'subject' => 'gfdas',
            'title' => 'gfdas á,dñakdgsn ',
            'keywords' => 'zxcv, tqwe',
            'seminar_id' => '3',
        ]);

        DB::table('presentations')->insert([
            'subject' => 'Suelos',
            'title' => 'Tratamientos fertilizantes para suelos insalubres',
            'keywords' => 'Don juan, Pipi calzaslargas',
            'seminar_id' => '2',
        ]);

    }
}
