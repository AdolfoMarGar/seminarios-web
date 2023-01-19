<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('documents')->insert([
            'type' => '3',
            'dir' => '/photo/perras.jpg',
            'seminar_id'=> '1',
            'presentation_id'=> null
        ]);
        DB::table('documents')->insert([
            'type' => '2',
            'dir' => '/pdf/libro.pdf',
            'seminar_id'=> '1',
            'presentation_id'=> '1'
        ]);
    }
}
