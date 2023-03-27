<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('documents')->delete();
        
        \DB::table('documents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 1,
                'dir' => 'PDFS/1679913697_ACTAS_2022.pdf',
                'mandatory' => 1,
                'seminar_id' => 1,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 10:41:37',
                'updated_at' => '2023-03-27 10:41:37',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 1,
                'dir' => 'PDFS/1679913756_Libro.Murcia.pdf',
                'mandatory' => 1,
                'seminar_id' => 2,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 10:42:36',
                'updated_at' => '2023-03-27 10:42:36',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 1,
                'dir' => 'PDFS/1679913769_ACTAS_2022.pdf',
                'mandatory' => 1,
                'seminar_id' => 3,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 10:42:49',
                'updated_at' => '2023-03-27 10:42:49',
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 1,
                'dir' => 'PDFS/1679913790_ACTAS Seminario horticultura Cantabria.pdf',
                'mandatory' => 1,
                'seminar_id' => 4,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 10:43:10',
                'updated_at' => '2023-03-27 10:43:10',
            ),
            4 => 
            array (
                'id' => 5,
                'type' => 1,
                'dir' => 'PDFS/1679913828_Libro.Murcia.pdf',
                'mandatory' => 1,
                'seminar_id' => 5,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 10:43:48',
                'updated_at' => '2023-03-27 10:43:48',
            ),
            5 => 
            array (
                'id' => 6,
                'type' => 1,
                'dir' => 'PDFS/1679913907_libro.Alcala_del_Rio.Sevilla.pdf',
                'mandatory' => 1,
                'seminar_id' => 6,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 10:45:08',
                'updated_at' => '2023-03-27 10:45:08',
            ),
            6 => 
            array (
                'id' => 8,
                'type' => 1,
                'dir' => 'PDFS/1679914276_Programa Seminario con visitas.pdf',
                'mandatory' => 3,
                'seminar_id' => 1,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 10:51:16',
                'updated_at' => '2023-03-27 10:51:16',
            ),
            7 => 
            array (
                'id' => 9,
                'type' => 1,
                'dir' => 'PDFS/1679914298_Programa Provisional 50Seminario.pdf',
                'mandatory' => 3,
                'seminar_id' => 2,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 10:51:38',
                'updated_at' => '2023-03-27 10:52:44',
            ),
            8 => 
            array (
                'id' => 10,
                'type' => 1,
                'dir' => 'PDFS/1679914354_Programa XLIX Seminario de Tecnicos y Especialistas en Horticultura.pdf',
                'mandatory' => 3,
                'seminar_id' => 3,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 10:52:34',
                'updated_at' => '2023-03-27 10:52:34',
            ),
            9 => 
            array (
                'id' => 11,
                'type' => 1,
                'dir' => 'PDFS/1679914390_Primera Circular_Programa Provisional.pdf',
                'mandatory' => 3,
                'seminar_id' => 4,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 10:53:10',
                'updated_at' => '2023-03-27 10:53:18',
            ),
            10 => 
            array (
                'id' => 12,
                'type' => 1,
                'dir' => 'PDFS/1679914608_Programa Provisional 50Seminario.pdf',
                'mandatory' => 3,
                'seminar_id' => 5,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 10:56:01',
                'updated_at' => '2023-03-27 10:56:48',
            ),
            11 => 
            array (
                'id' => 13,
                'type' => 1,
                'dir' => 'PDFS/1679914590_Programa seminario.pdf',
                'mandatory' => 3,
                'seminar_id' => 6,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 10:56:30',
                'updated_at' => '2023-03-27 10:56:30',
            ),
            12 => 
            array (
                'id' => 14,
                'type' => 1,
            'dir' => 'PDFS/1679914671_libro-resumenes-xlvii-steh-de-murcia (1).pdf',
                'mandatory' => 2,
                'seminar_id' => 5,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 10:57:51',
                'updated_at' => '2023-03-27 10:57:51',
            ),
            13 => 
            array (
                'id' => 15,
                'type' => 1,
            'dir' => 'PDFS/1679914761_Libro_de_Resumenes_05_IMPRENTA_(3mmSangre).pdf',
                'mandatory' => 2,
                'seminar_id' => 1,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 10:59:21',
                'updated_at' => '2023-03-27 10:59:21',
            ),
            14 => 
            array (
                'id' => 16,
                'type' => 1,
                'dir' => 'PDFS/1679914814_Resumen L Seminario Técnicos_ BEST4SOIL.pdf',
                'mandatory' => 2,
                'seminar_id' => 2,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 11:00:14',
                'updated_at' => '2023-03-27 11:00:14',
            ),
            15 => 
            array (
                'id' => 17,
                'type' => 1,
            'dir' => 'PDFS/1679914867_libro-resumenes-xlvii-steh-de-murcia (1).pdf',
                'mandatory' => 2,
                'seminar_id' => 3,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 11:01:07',
                'updated_at' => '2023-03-27 11:01:40',
            ),
            16 => 
            array (
                'id' => 18,
                'type' => 1,
                'dir' => 'PDFS/1679914893_Libro Resumenes STEH Cantabria.pdf',
                'mandatory' => 2,
                'seminar_id' => 4,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 11:01:33',
                'updated_at' => '2023-03-27 11:01:33',
            ),
            17 => 
            array (
                'id' => 19,
                'type' => 1,
            'dir' => 'PDFS/1679914959_Libro_de_Resumenes_05_IMPRENTA_(3mmSangre).pdf',
                'mandatory' => 2,
                'seminar_id' => 6,
                'presentation_id' => NULL,
                'created_at' => '2023-03-27 11:02:39',
                'updated_at' => '2023-03-27 11:02:39',
            ),
        ));
        
        
    }
}