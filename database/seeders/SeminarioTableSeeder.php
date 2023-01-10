<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeminarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('seminarios')->insert([
            'name' => 'Papel higiénico',
            'description' => 'Papel higiénico extrasuave para glúteos sensibles',
            'anio' => '2022',
        ]);
    }
}
