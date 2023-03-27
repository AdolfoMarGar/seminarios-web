<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeminarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seminars')->delete();
        
        \DB::table('seminars')->insert(array (
            0 => 
            array (
                'created_at' => '2023-03-26 11:35:09',
                'hosts' => 'Cajamar, IFAPA',
                'id' => 1,
                'location' => 'Almería, Andalucía',
                'updated_at' => '2023-03-26 11:35:37',
                'year' => 2022,
            ),
            1 => 
            array (
                'created_at' => '2023-03-26 11:45:30',
                'hosts' => 'RiegoPlant S.L.',
                'id' => 2,
                'location' => 'Las Palmas, Gran Canaria',
                'updated_at' => '2023-03-26 11:45:30',
                'year' => 2021,
            ),
            2 => 
            array (
                'created_at' => '2023-03-26 11:46:44',
                'hosts' => 'Cajamar, Sakata',
                'id' => 3,
                'location' => 'Toledo, Castilla-La Mancha',
                'updated_at' => '2023-03-26 11:46:44',
                'year' => 2019,
            ),
            3 => 
            array (
                'created_at' => '2023-03-26 11:48:33',
                'hosts' => 'CIFA, Enza Zaden',
                'id' => 4,
                'location' => 'Santander, Cantabria',
                'updated_at' => '2023-03-26 11:48:33',
                'year' => 2018,
            ),
            4 => 
            array (
                'created_at' => '2023-03-26 11:49:54',
                'hosts' => 'Cajamar, ADNAgro',
                'id' => 5,
                'location' => 'Murcia, Murcia',
                'updated_at' => '2023-03-26 11:49:54',
                'year' => 2017,
            ),
            5 => 
            array (
                'created_at' => '2023-03-26 11:51:41',
                'hosts' => 'Horticola ESMA, INEA',
                'id' => 6,
                'location' => 'Valladolid, Castilla y Leon',
                'updated_at' => '2023-03-26 11:51:41',
                'year' => 2016,
            ),
        ));
        
        
    }
}