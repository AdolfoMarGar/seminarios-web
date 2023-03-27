<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PresentationSpeakerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('presentation_speaker')->delete();
        
        \DB::table('presentation_speaker')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'id' => 6,
                'presentation_id' => 1,
                'speaker_id' => 2,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'id' => 7,
                'presentation_id' => 1,
                'speaker_id' => 3,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'id' => 8,
                'presentation_id' => 1,
                'speaker_id' => 4,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'id' => 9,
                'presentation_id' => 4,
                'speaker_id' => 6,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'id' => 10,
                'presentation_id' => 4,
                'speaker_id' => 10,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'created_at' => NULL,
                'id' => 11,
                'presentation_id' => 5,
                'speaker_id' => 7,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'created_at' => NULL,
                'id' => 12,
                'presentation_id' => 5,
                'speaker_id' => 9,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'created_at' => NULL,
                'id' => 13,
                'presentation_id' => 6,
                'speaker_id' => 3,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'created_at' => NULL,
                'id' => 14,
                'presentation_id' => 6,
                'speaker_id' => 11,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'created_at' => NULL,
                'id' => 15,
                'presentation_id' => 7,
                'speaker_id' => 6,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'created_at' => NULL,
                'id' => 16,
                'presentation_id' => 7,
                'speaker_id' => 10,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'created_at' => NULL,
                'id' => 17,
                'presentation_id' => 8,
                'speaker_id' => 6,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'created_at' => NULL,
                'id' => 18,
                'presentation_id' => 8,
                'speaker_id' => 12,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'created_at' => NULL,
                'id' => 25,
                'presentation_id' => 11,
                'speaker_id' => 18,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'created_at' => NULL,
                'id' => 26,
                'presentation_id' => 11,
                'speaker_id' => 20,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'created_at' => NULL,
                'id' => 27,
                'presentation_id' => 11,
                'speaker_id' => 21,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'created_at' => NULL,
                'id' => 28,
                'presentation_id' => 12,
                'speaker_id' => 15,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'created_at' => NULL,
                'id' => 29,
                'presentation_id' => 12,
                'speaker_id' => 16,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'created_at' => NULL,
                'id' => 30,
                'presentation_id' => 13,
                'speaker_id' => 5,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'created_at' => NULL,
                'id' => 31,
                'presentation_id' => 13,
                'speaker_id' => 13,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'created_at' => NULL,
                'id' => 32,
                'presentation_id' => 13,
                'speaker_id' => 14,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'created_at' => NULL,
                'id' => 33,
                'presentation_id' => 14,
                'speaker_id' => 14,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'created_at' => NULL,
                'id' => 34,
                'presentation_id' => 14,
                'speaker_id' => 16,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'created_at' => NULL,
                'id' => 35,
                'presentation_id' => 14,
                'speaker_id' => 22,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'created_at' => NULL,
                'id' => 36,
                'presentation_id' => 2,
                'speaker_id' => 1,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'created_at' => NULL,
                'id' => 37,
                'presentation_id' => 2,
                'speaker_id' => 4,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'created_at' => NULL,
                'id' => 38,
                'presentation_id' => 2,
                'speaker_id' => 5,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'created_at' => NULL,
                'id' => 39,
                'presentation_id' => 9,
                'speaker_id' => 14,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'created_at' => NULL,
                'id' => 40,
                'presentation_id' => 9,
                'speaker_id' => 16,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'created_at' => NULL,
                'id' => 41,
                'presentation_id' => 9,
                'speaker_id' => 22,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'created_at' => NULL,
                'id' => 42,
                'presentation_id' => 10,
                'speaker_id' => 2,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'created_at' => NULL,
                'id' => 43,
                'presentation_id' => 10,
                'speaker_id' => 15,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'created_at' => NULL,
                'id' => 44,
                'presentation_id' => 10,
                'speaker_id' => 17,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'created_at' => NULL,
                'id' => 45,
                'presentation_id' => 15,
                'speaker_id' => 10,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'created_at' => NULL,
                'id' => 46,
                'presentation_id' => 15,
                'speaker_id' => 12,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'created_at' => NULL,
                'id' => 47,
                'presentation_id' => 15,
                'speaker_id' => 13,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'created_at' => NULL,
                'id' => 48,
                'presentation_id' => 16,
                'speaker_id' => 16,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'created_at' => NULL,
                'id' => 49,
                'presentation_id' => 16,
                'speaker_id' => 17,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'created_at' => NULL,
                'id' => 50,
                'presentation_id' => 16,
                'speaker_id' => 18,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'created_at' => NULL,
                'id' => 51,
                'presentation_id' => 17,
                'speaker_id' => 4,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'created_at' => NULL,
                'id' => 52,
                'presentation_id' => 17,
                'speaker_id' => 22,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'created_at' => NULL,
                'id' => 53,
                'presentation_id' => 18,
                'speaker_id' => 19,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'created_at' => NULL,
                'id' => 54,
                'presentation_id' => 18,
                'speaker_id' => 20,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'created_at' => NULL,
                'id' => 55,
                'presentation_id' => 18,
                'speaker_id' => 21,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'created_at' => NULL,
                'id' => 56,
                'presentation_id' => 19,
                'speaker_id' => 1,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'created_at' => NULL,
                'id' => 57,
                'presentation_id' => 19,
                'speaker_id' => 4,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'created_at' => NULL,
                'id' => 58,
                'presentation_id' => 19,
                'speaker_id' => 5,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'created_at' => NULL,
                'id' => 59,
                'presentation_id' => 20,
                'speaker_id' => 3,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'created_at' => NULL,
                'id' => 60,
                'presentation_id' => 20,
                'speaker_id' => 19,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'created_at' => NULL,
                'id' => 61,
                'presentation_id' => 20,
                'speaker_id' => 21,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'created_at' => NULL,
                'id' => 62,
                'presentation_id' => 21,
                'speaker_id' => 7,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'created_at' => NULL,
                'id' => 63,
                'presentation_id' => 21,
                'speaker_id' => 20,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'created_at' => NULL,
                'id' => 64,
                'presentation_id' => 21,
                'speaker_id' => 21,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'created_at' => NULL,
                'id' => 65,
                'presentation_id' => 22,
                'speaker_id' => 16,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'created_at' => NULL,
                'id' => 66,
                'presentation_id' => 22,
                'speaker_id' => 17,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'created_at' => NULL,
                'id' => 67,
                'presentation_id' => 22,
                'speaker_id' => 22,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'created_at' => NULL,
                'id' => 68,
                'presentation_id' => 23,
                'speaker_id' => 8,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'created_at' => NULL,
                'id' => 69,
                'presentation_id' => 23,
                'speaker_id' => 9,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'created_at' => NULL,
                'id' => 70,
                'presentation_id' => 23,
                'speaker_id' => 21,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'created_at' => NULL,
                'id' => 71,
                'presentation_id' => 24,
                'speaker_id' => 14,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'created_at' => NULL,
                'id' => 72,
                'presentation_id' => 24,
                'speaker_id' => 16,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'created_at' => NULL,
                'id' => 73,
                'presentation_id' => 24,
                'speaker_id' => 22,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'created_at' => NULL,
                'id' => 74,
                'presentation_id' => 25,
                'speaker_id' => 15,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'created_at' => NULL,
                'id' => 75,
                'presentation_id' => 25,
                'speaker_id' => 21,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'created_at' => NULL,
                'id' => 76,
                'presentation_id' => 25,
                'speaker_id' => 22,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'created_at' => NULL,
                'id' => 77,
                'presentation_id' => 26,
                'speaker_id' => 13,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'created_at' => NULL,
                'id' => 78,
                'presentation_id' => 26,
                'speaker_id' => 15,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'created_at' => NULL,
                'id' => 79,
                'presentation_id' => 26,
                'speaker_id' => 19,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'created_at' => NULL,
                'id' => 80,
                'presentation_id' => 27,
                'speaker_id' => 3,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'created_at' => NULL,
                'id' => 81,
                'presentation_id' => 27,
                'speaker_id' => 10,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'created_at' => NULL,
                'id' => 82,
                'presentation_id' => 27,
                'speaker_id' => 11,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'created_at' => NULL,
                'id' => 83,
                'presentation_id' => 28,
                'speaker_id' => 15,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'created_at' => NULL,
                'id' => 84,
                'presentation_id' => 28,
                'speaker_id' => 20,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'created_at' => NULL,
                'id' => 85,
                'presentation_id' => 28,
                'speaker_id' => 22,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'created_at' => NULL,
                'id' => 86,
                'presentation_id' => 29,
                'speaker_id' => 1,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'created_at' => NULL,
                'id' => 87,
                'presentation_id' => 29,
                'speaker_id' => 4,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'created_at' => NULL,
                'id' => 88,
                'presentation_id' => 29,
                'speaker_id' => 11,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'created_at' => NULL,
                'id' => 89,
                'presentation_id' => 30,
                'speaker_id' => 6,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'created_at' => NULL,
                'id' => 90,
                'presentation_id' => 30,
                'speaker_id' => 7,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'created_at' => NULL,
                'id' => 91,
                'presentation_id' => 30,
                'speaker_id' => 8,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'created_at' => NULL,
                'id' => 92,
                'presentation_id' => 31,
                'speaker_id' => 5,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'created_at' => NULL,
                'id' => 93,
                'presentation_id' => 31,
                'speaker_id' => 6,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'created_at' => NULL,
                'id' => 94,
                'presentation_id' => 31,
                'speaker_id' => 12,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'created_at' => NULL,
                'id' => 96,
                'presentation_id' => 33,
                'speaker_id' => 21,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'created_at' => NULL,
                'id' => 97,
                'presentation_id' => 33,
                'speaker_id' => 22,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'created_at' => NULL,
                'id' => 98,
                'presentation_id' => 33,
                'speaker_id' => 23,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'created_at' => NULL,
                'id' => 99,
                'presentation_id' => 34,
                'speaker_id' => 9,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'created_at' => NULL,
                'id' => 100,
                'presentation_id' => 34,
                'speaker_id' => 11,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'created_at' => NULL,
                'id' => 101,
                'presentation_id' => 34,
                'speaker_id' => 22,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}