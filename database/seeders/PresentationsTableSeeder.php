<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PresentationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('presentations')->delete();
        
        \DB::table('presentations')->insert(array (
            0 => 
            array (
                'created_at' => '2023-03-27 06:19:27',
                'id' => 1,
                'keywords' => 'Humectación, vapor, mediterraneo.',
                'seminar_id' => 1,
                'subject' => 'Técnicas de cultivo',
                'title' => 'Adecuación climática en invernadero mediante sistemas pasivos de humectación y calefacción.',
                'updated_at' => '2023-03-27 06:20:26',
            ),
            1 => 
            array (
                'created_at' => '2023-03-27 06:22:10',
                'id' => 2,
                'keywords' => 'Primer año, vertical.',
                'seminar_id' => 1,
                'subject' => 'Técnicas de cultivo',
                'title' => 'Resultados de un prototipo de agricultura vertical durante el primer año de funcionamiento.',
                'updated_at' => '2023-03-27 06:40:56',
            ),
            2 => 
            array (
                'created_at' => '2023-03-27 06:23:40',
                'id' => 4,
                'keywords' => 'Crithmum maritimum L., drenaje, compost.',
                'seminar_id' => 1,
                'subject' => 'Horticultura circular',
            'title' => 'Gestión de residuos agrarios en la horticultura protegida (Crithmum maritimum L.)',
                'updated_at' => '2023-03-27 06:23:40',
            ),
            3 => 
            array (
                'created_at' => '2023-03-27 06:25:27',
                'id' => 5,
                'keywords' => 'Acuaponía, selenio.',
                'seminar_id' => 1,
                'subject' => 'Horticultura circular',
                'title' => 'Sistema de procción de lechuga en acuaponía. Respuesta frente a la aplicación de selenio.',
                'updated_at' => '2023-03-27 06:25:27',
            ),
            4 => 
            array (
                'created_at' => '2023-03-27 06:26:20',
                'id' => 6,
                'keywords' => 'Riego, esparrago.',
                'seminar_id' => 1,
                'subject' => 'Riego y fertilización',
                'title' => 'Sistemas de riego en esparrago.',
                'updated_at' => '2023-03-27 06:26:20',
            ),
            5 => 
            array (
                'created_at' => '2023-03-27 06:27:45',
                'id' => 7,
                'keywords' => 'Lodo, fertilizante.',
                'seminar_id' => 1,
                'subject' => 'Riego y fertilización',
                'title' => 'Aprovechamiento de lodos de depuradora como fertilizante agrícola en cultivo de lechuga.',
                'updated_at' => '2023-03-27 06:27:45',
            ),
            6 => 
            array (
                'created_at' => '2023-03-27 06:29:46',
                'id' => 8,
                'keywords' => 'Compost, té.',
                'seminar_id' => 2,
                'subject' => 'Compostaje y valorización de residuos en horticultura',
                'title' => 'Aplicación de té de compost en horticulura.',
                'updated_at' => '2023-03-27 06:29:46',
            ),
            7 => 
            array (
                'created_at' => '2023-03-27 06:35:47',
                'id' => 9,
                'keywords' => 'R. okamurae, arribazones.',
                'seminar_id' => 2,
                'subject' => 'Compostaje y valorización de residuos en horticultura',
                'title' => 'Co-compostaje de arribazones de R. okamurae y residuos vegetales.',
                'updated_at' => '2023-03-27 06:40:45',
            ),
            8 => 
            array (
                'created_at' => '2023-03-27 06:37:14',
                'id' => 10,
                'keywords' => 'Verticilosis, berenjena.',
                'seminar_id' => 2,
                'subject' => 'Manejo de plagas y enfermedades',
                'title' => 'Gravedad de la Verticilosis de la berenjena bajo diferentes condiciones ambientales.',
                'updated_at' => '2023-03-27 06:40:34',
            ),
            9 => 
            array (
                'created_at' => '2023-03-27 06:38:17',
                'id' => 11,
                'keywords' => 'Podredumbre, raíz, corona, fresa.',
                'seminar_id' => 2,
                'subject' => 'Manejo de plagas y enfermedades',
                'title' => 'Posibilidades de biocontrol de la Podredumbre de raíz y corona de fresa.',
                'updated_at' => '2023-03-27 06:38:17',
            ),
            10 => 
            array (
                'created_at' => '2023-03-27 06:38:59',
                'id' => 12,
                'keywords' => 'Boniatos, ensayo.',
                'seminar_id' => 2,
                'subject' => 'Material vegetal',
                'title' => 'Ensayo de boniatos.',
                'updated_at' => '2023-03-27 06:38:59',
            ),
            11 => 
            array (
                'created_at' => '2023-03-27 06:40:23',
                'id' => 13,
                'keywords' => 'Tomate, comportamiento, Tenerife.',
                'seminar_id' => 2,
                'subject' => 'Material vegetal',
                'title' => 'Comportamiento agrónomico de 16 cultivares de tomate de ensalada en Tenerife.',
                'updated_at' => '2023-03-27 06:40:23',
            ),
            12 => 
            array (
                'created_at' => '2023-03-27 06:44:10',
                'id' => 14,
                'keywords' => 'Melón, aire libre, microalgas, bioestimulante.',
                'seminar_id' => 3,
                'subject' => 'Cucurbitáceas',
                'title' => 'Efectos de la aplicación de un bioestimulante a base de microalgas sobre cultivo de melón al aire libre.',
                'updated_at' => '2023-03-27 06:44:10',
            ),
            13 => 
            array (
                'created_at' => '2023-03-27 06:46:51',
                'id' => 15,
                'keywords' => 'Melón, malla, sombreo, fotoselectivas.',
                'seminar_id' => 3,
                'subject' => 'Cucurbitáceas',
                'title' => 'Comportamiento agronómico de melones cantalupos bajo diferentes mallas de sombreo fotoselectivas.',
                'updated_at' => '2023-03-27 06:46:51',
            ),
            14 => 
            array (
                'created_at' => '2023-03-27 06:48:38',
                'id' => 16,
                'keywords' => 'Pimiento, agua urbana.',
                'seminar_id' => 3,
                'subject' => 'Sostenibilidad',
                'title' => 'Fertirrigación del cultivo de pimiento utilizando aguas urbanas regeneradas.',
                'updated_at' => '2023-03-27 06:48:38',
            ),
            15 => 
            array (
                'created_at' => '2023-03-27 06:49:17',
                'id' => 17,
                'keywords' => 'Guisante, Pisum sativum, ecológico',
                'seminar_id' => 3,
                'subject' => 'Sostenibilidad',
            'title' => 'Cultivo en invernadero ecológico de siete cultivares de guisante (Pisum sativum).',
                'updated_at' => '2023-03-27 06:49:17',
            ),
            16 => 
            array (
                'created_at' => '2023-03-27 06:52:39',
                'id' => 18,
                'keywords' => 'Aragón, patata.',
                'seminar_id' => 3,
                'subject' => 'Solanáceas',
                'title' => 'Evaluación agronómica y de calidad industrial de cultivares de patata ensayados en Aragón. Campaña 2018.',
                'updated_at' => '2023-03-27 06:52:39',
            ),
            17 => 
            array (
                'created_at' => '2023-03-27 06:53:33',
                'id' => 19,
                'keywords' => 'Resistente, virus, pimiento, tomate, calabacín.',
                'seminar_id' => 3,
                'subject' => 'Solanáceas',
                'title' => 'Oferta de cultivares de pimiento, tomate y calabacín, resistentes a virus.',
                'updated_at' => '2023-03-27 06:53:33',
            ),
            18 => 
            array (
                'created_at' => '2023-03-27 06:55:20',
                'id' => 20,
                'keywords' => 'IMIDRA, lechuga, col.',
                'seminar_id' => 4,
                'subject' => 'Cultivares tradicionales',
            'title' => 'Líneas de trabajo del grupo de horticultura del IMIDRA (Comunidad de Madrid).',
                'updated_at' => '2023-03-27 06:55:20',
            ),
            19 => 
            array (
                'created_at' => '2023-03-27 06:56:03',
                'id' => 21,
                'keywords' => 'Tomate, Cantabria, cultivo.',
                'seminar_id' => 4,
                'subject' => 'Cultivares tradicionales',
                'title' => 'Estudio del comportamiento de cultivares tradicionales de tomate de Cantabria en diferentes sistemas de cultivo.',
                'updated_at' => '2023-03-27 06:56:03',
            ),
            20 => 
            array (
                'created_at' => '2023-03-27 06:57:11',
                'id' => 22,
                'keywords' => 'Bróculi, dos epocas, plantación.',
                'seminar_id' => 4,
                'subject' => 'Brassicas',
                'title' => 'Cultivares de bróculi en Navarra en dos épocas de plantación.',
                'updated_at' => '2023-03-27 06:57:11',
            ),
            21 => 
            array (
                'created_at' => '2023-03-27 06:58:05',
                'id' => 23,
                'keywords' => 'Coliflor, ensayo, Extremadura.',
                'seminar_id' => 4,
                'subject' => 'Brassicas',
                'title' => 'Ensayo de variedades de coliflor en Extremadura 2017.',
                'updated_at' => '2023-03-27 06:58:05',
            ),
            22 => 
            array (
                'created_at' => '2023-03-27 06:58:53',
                'id' => 24,
                'keywords' => 'Alcachofa, semilla, agronomico.',
                'seminar_id' => 4,
                'subject' => 'Compuestas',
            'title' => 'Estudio agronómico de cultivares de alcachofa (cynara scolymus l) procedentes de semilla.',
                'updated_at' => '2023-03-27 06:58:53',
            ),
            23 => 
            array (
                'created_at' => '2023-03-27 06:59:53',
                'id' => 25,
                'keywords' => 'Extracto, compost, aplicación, lechuga baby leaf.',
                'seminar_id' => 4,
                'subject' => 'Compuestas',
                'title' => 'Influencia de un extracto biológico de compost y de su modo de aplicación en la producción de lechuga baby leaf en bandejas flotantes.',
                'updated_at' => '2023-03-27 06:59:53',
            ),
            24 => 
            array (
                'created_at' => '2023-03-27 07:13:43',
                'id' => 26,
                'keywords' => 'Tipos, sandia.',
                'seminar_id' => 5,
                'subject' => 'Cucurbitáceas',
                'title' => 'Estudio de diferentes tipos y cultivares de sandía.',
                'updated_at' => '2023-03-27 07:13:43',
            ),
            25 => 
            array (
                'created_at' => '2023-03-27 07:14:35',
                'id' => 27,
                'keywords' => 'Bajo plastico, sandia, portainjertos.',
                'seminar_id' => 5,
                'subject' => 'Cucurbitáceas',
                'title' => 'Uso de portainjertos en el cultivo de sandia bajo plastico.',
                'updated_at' => '2023-03-27 07:14:35',
            ),
            26 => 
            array (
                'created_at' => '2023-03-27 07:19:55',
                'id' => 28,
                'keywords' => 'Poda, pimiento italiano, aire libre.',
                'seminar_id' => 5,
                'subject' => 'Solanáceas',
                'title' => 'Tipos de poda en pimiento italiano, Cultivo al aire libre.',
                'updated_at' => '2023-03-27 07:19:55',
            ),
            27 => 
            array (
                'created_at' => '2023-03-27 07:20:52',
                'id' => 29,
                'keywords' => 'Entutorado, aire libre, pimiento italiano.',
                'seminar_id' => 5,
                'subject' => 'Solanáceas',
                'title' => 'Técnicas de entutorado en pimiento italiano. Cultivo al aire libre.',
                'updated_at' => '2023-03-27 07:20:52',
            ),
            28 => 
            array (
                'created_at' => '2023-03-27 07:22:42',
                'id' => 30,
                'keywords' => 'Fertirrigación, leguminosas, invernadero.',
                'seminar_id' => 5,
                'subject' => 'Cultivo ecológico',
                'title' => 'Efecto de la dosis de fertirrigación sobre el cultivo de leguminosas en invernadero ecológico.',
                'updated_at' => '2023-03-27 07:22:42',
            ),
            29 => 
            array (
                'created_at' => '2023-03-27 07:27:17',
                'id' => 31,
                'keywords' => 'Bioestimulante, cuaje, calabacín',
                'seminar_id' => 5,
                'subject' => 'Cultivo ecológico',
                'title' => 'Evaluación de bioestimulantes para el cuaje en calabacín.',
                'updated_at' => '2023-03-27 07:27:17',
            ),
            30 => 
            array (
                'created_at' => '2023-03-27 08:26:31',
                'id' => 33,
                'keywords' => 'Lechuga, batavia, Tenerife, primavera, verano.',
                'seminar_id' => 6,
                'subject' => 'Compuestas',
                'title' => 'Ensayos de cultivares de lechuga tipo batavia en la zona noreste de Tenerife en ciclos de primavera y verano. Campaña 2017.',
                'updated_at' => '2023-03-27 08:26:31',
            ),
            31 => 
            array (
                'created_at' => '2023-03-27 08:27:38',
                'id' => 34,
                'keywords' => 'Control biológico, pepino, invierno, schicha.',
                'seminar_id' => 6,
                'subject' => 'Cucurbitáceas',
            'title' => 'Control biológico de plagas en cultivo de pepino de invierno: amblyseius swirskii athias-henriot frente a transeius montdorensis (schicha).',
                'updated_at' => '2023-03-27 08:27:38',
            ),
        ));
        
        
    }
}