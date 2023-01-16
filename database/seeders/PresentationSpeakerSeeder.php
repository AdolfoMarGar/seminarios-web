<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresentationSpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('presentation_speaker')->insert([
            'presentation_id' => '1',
            'speaker_id' => '1',
        ]);
        DB::table('presentation_speaker')->insert([
            'presentation_id' => '1',
            'speaker_id' => '2',
        ]);
        DB::table('presentation_speaker')->insert([
            'presentation_id' => '2',
            'speaker_id' => '1',
        ]);
        

    }
}
