<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SpeakerSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('speakers')->insert([
            'name' => 'Juani',
            'lastname' => 'Lopez',
            'region' => 'Nijar, Almeria'
        ]);
        DB::table('speakers')->insert([
            ['name' => 'María', 'lastname' => 'García', 'region' => 'Madrid'],
            ['name' => 'Juan', 'lastname' => 'Pérez', 'region' => 'Barcelona'],
            ['name' => 'Lucía', 'lastname' => 'Fernández', 'region' => 'Valencia'],
            ['name' => 'Javier', 'lastname' => 'Martínez', 'region' => 'Sevilla'],
            ['name' => 'Marta', 'lastname' => 'Sánchez', 'region' => 'Alicante'],
            ['name' => 'Pablo', 'lastname' => 'Rodríguez', 'region' => 'Málaga'],
            ['name' => 'Sofía', 'lastname' => 'Gómez', 'region' => 'Murcia'],
            ['name' => 'Antonio', 'lastname' => 'González', 'region' => 'Cádiz'],
            ['name' => 'Isabel', 'lastname' => 'Torres', 'region' => 'Zaragoza'],
            ['name' => 'José', 'lastname' => 'Gutiérrez', 'region' => 'Vizcaya'],
            ['name' => 'Laura', 'lastname' => 'Ortega', 'region' => 'Granada']
        ]);
    }
}
