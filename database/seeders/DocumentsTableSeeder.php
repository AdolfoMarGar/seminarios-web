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
                'created_at' => '2023-03-27 10:41:37',
                'dir' => 'PDFS/1679913697_ACTAS_2022.pdf',
                'id' => 1,
                'mandatory' => 1,
                'presentation_id' => NULL,
                'seminar_id' => 1,
                'type' => 1,
                'updated_at' => '2023-03-27 10:41:37',
            ),
            1 => 
            array (
                'created_at' => '2023-03-27 10:42:36',
                'dir' => 'PDFS/1679913756_Libro.Murcia.pdf',
                'id' => 2,
                'mandatory' => 1,
                'presentation_id' => NULL,
                'seminar_id' => 2,
                'type' => 1,
                'updated_at' => '2023-03-27 10:42:36',
            ),
            2 => 
            array (
                'created_at' => '2023-03-27 10:42:49',
                'dir' => 'PDFS/1679913769_ACTAS_2022.pdf',
                'id' => 3,
                'mandatory' => 1,
                'presentation_id' => NULL,
                'seminar_id' => 3,
                'type' => 1,
                'updated_at' => '2023-03-27 10:42:49',
            ),
            3 => 
            array (
                'created_at' => '2023-03-27 10:43:10',
                'dir' => 'PDFS/1679913790_ACTAS Seminario horticultura Cantabria.pdf',
                'id' => 4,
                'mandatory' => 1,
                'presentation_id' => NULL,
                'seminar_id' => 4,
                'type' => 1,
                'updated_at' => '2023-03-27 10:43:10',
            ),
            4 => 
            array (
                'created_at' => '2023-03-27 10:43:48',
                'dir' => 'PDFS/1679913828_Libro.Murcia.pdf',
                'id' => 5,
                'mandatory' => 1,
                'presentation_id' => NULL,
                'seminar_id' => 5,
                'type' => 1,
                'updated_at' => '2023-03-27 10:43:48',
            ),
            5 => 
            array (
                'created_at' => '2023-03-27 10:45:08',
                'dir' => 'PDFS/1679913907_libro.Alcala_del_Rio.Sevilla.pdf',
                'id' => 6,
                'mandatory' => 1,
                'presentation_id' => NULL,
                'seminar_id' => 6,
                'type' => 1,
                'updated_at' => '2023-03-27 10:45:08',
            ),
            6 => 
            array (
                'created_at' => '2023-03-27 10:51:16',
                'dir' => 'PDFS/1679914276_Programa Seminario con visitas.pdf',
                'id' => 8,
                'mandatory' => 3,
                'presentation_id' => NULL,
                'seminar_id' => 1,
                'type' => 1,
                'updated_at' => '2023-03-27 10:51:16',
            ),
            7 => 
            array (
                'created_at' => '2023-03-27 10:51:38',
                'dir' => 'PDFS/1679914298_Programa Provisional 50Seminario.pdf',
                'id' => 9,
                'mandatory' => 3,
                'presentation_id' => NULL,
                'seminar_id' => 2,
                'type' => 1,
                'updated_at' => '2023-03-27 10:52:44',
            ),
            8 => 
            array (
                'created_at' => '2023-03-27 10:52:34',
                'dir' => 'PDFS/1679914354_Programa XLIX Seminario de Tecnicos y Especialistas en Horticultura.pdf',
                'id' => 10,
                'mandatory' => 3,
                'presentation_id' => NULL,
                'seminar_id' => 3,
                'type' => 1,
                'updated_at' => '2023-03-27 10:52:34',
            ),
            9 => 
            array (
                'created_at' => '2023-03-27 10:53:10',
                'dir' => 'PDFS/1679914390_Primera Circular_Programa Provisional.pdf',
                'id' => 11,
                'mandatory' => 3,
                'presentation_id' => NULL,
                'seminar_id' => 4,
                'type' => 1,
                'updated_at' => '2023-03-27 10:53:18',
            ),
            10 => 
            array (
                'created_at' => '2023-03-27 10:56:01',
                'dir' => 'PDFS/1679914608_Programa Provisional 50Seminario.pdf',
                'id' => 12,
                'mandatory' => 3,
                'presentation_id' => NULL,
                'seminar_id' => 5,
                'type' => 1,
                'updated_at' => '2023-03-27 10:56:48',
            ),
            11 => 
            array (
                'created_at' => '2023-03-27 10:56:30',
                'dir' => 'PDFS/1679914590_Programa seminario.pdf',
                'id' => 13,
                'mandatory' => 3,
                'presentation_id' => NULL,
                'seminar_id' => 6,
                'type' => 1,
                'updated_at' => '2023-03-27 10:56:30',
            ),
            12 => 
            array (
                'created_at' => '2023-03-27 10:57:51',
            'dir' => 'PDFS/1679914671_libro-resumenes-xlvii-steh-de-murcia (1).pdf',
                'id' => 14,
                'mandatory' => 2,
                'presentation_id' => NULL,
                'seminar_id' => 5,
                'type' => 1,
                'updated_at' => '2023-03-27 10:57:51',
            ),
            13 => 
            array (
                'created_at' => '2023-03-27 10:59:21',
            'dir' => 'PDFS/1679914761_Libro_de_Resumenes_05_IMPRENTA_(3mmSangre).pdf',
                'id' => 15,
                'mandatory' => 2,
                'presentation_id' => NULL,
                'seminar_id' => 1,
                'type' => 1,
                'updated_at' => '2023-03-27 10:59:21',
            ),
            14 => 
            array (
                'created_at' => '2023-03-27 11:00:14',
                'dir' => 'PDFS/1679914814_Resumen L Seminario Técnicos_ BEST4SOIL.pdf',
                'id' => 16,
                'mandatory' => 2,
                'presentation_id' => NULL,
                'seminar_id' => 2,
                'type' => 1,
                'updated_at' => '2023-03-27 11:00:14',
            ),
            15 => 
            array (
                'created_at' => '2023-03-27 11:01:07',
            'dir' => 'PDFS/1679914867_libro-resumenes-xlvii-steh-de-murcia (1).pdf',
                'id' => 17,
                'mandatory' => 2,
                'presentation_id' => NULL,
                'seminar_id' => 3,
                'type' => 1,
                'updated_at' => '2023-03-27 11:01:40',
            ),
            16 => 
            array (
                'created_at' => '2023-03-27 11:01:33',
                'dir' => 'PDFS/1679914893_Libro Resumenes STEH Cantabria.pdf',
                'id' => 18,
                'mandatory' => 2,
                'presentation_id' => NULL,
                'seminar_id' => 4,
                'type' => 1,
                'updated_at' => '2023-03-27 11:01:33',
            ),
            17 => 
            array (
                'created_at' => '2023-03-27 11:02:39',
            'dir' => 'PDFS/1679914959_Libro_de_Resumenes_05_IMPRENTA_(3mmSangre).pdf',
                'id' => 19,
                'mandatory' => 2,
                'presentation_id' => NULL,
                'seminar_id' => 6,
                'type' => 1,
                'updated_at' => '2023-03-27 11:02:39',
            ),
        ));
        
        
    }
}