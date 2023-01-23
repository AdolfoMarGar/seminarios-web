<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        $this->call(SeminarTableSeeder::class);
        $this->call(DocumentsTableSeeder::class);
        $this->call(SpeakerSeeder::class);
        $this->call(PresentationSeeder::class);
        $this->call(MyrequestSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UserdataSeeder::class);
        $this->call(PresentationSpeakerSeeder::class);

    }
}
