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
        $this->call(SeminarsTableSeeder::class);
        $this->call(PresentationsTableSeeder::class);
        $this->call(SpeakerTableSeeder::class);
        $this->call(PresentationSpeakerTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UserdataSeeder::class);
        $this->call(DocumentsTableSeeder::class);
        //$this->call(MyrequestSeeder::class);        
    }
}
