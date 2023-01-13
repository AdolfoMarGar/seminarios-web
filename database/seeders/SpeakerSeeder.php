<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('speakers')->insert([
            'name' => 'Juani',
            'lastname' => 'Lopez',
            'region' => 'Madrid'
        ]);
        DB::table('speakers')->insert([
            'name' => 'Alfonso',
            'lastname' => 'Gimenez',
            'region' => 'Cataluña'
        ]);
        DB::table('speakers')->insert([
            'name' => 'Roberto',
            'lastname' => 'Caracoche',
            'region' => 'Galicia'
        ]);
    }
}
