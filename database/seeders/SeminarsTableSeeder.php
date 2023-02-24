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
                'created_at' => NULL,
                'hosts' => 'Cajamar',
                'id' => 1,
                'location' => 'Almería',
                'updated_at' => NULL,
                'year' => 2005,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'hosts' => 'Publifiestas Conde',
                'id' => 2,
                'location' => 'Jaen',
                'updated_at' => NULL,
                'year' => 2006,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'hosts' => 'Unicaja',
                'id' => 3,
                'location' => 'Malaga',
                'updated_at' => NULL,
                'year' => 2012,
            ),
        ));
        
        
    }
}