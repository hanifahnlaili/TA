<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KompetensiIntiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kompetensi_inti')->delete();
        
        \DB::table('kompetensi_inti')->insert(array (
            0 => 
            array (
                'ID_KI' => 'KI - 1',
                'NAMA_KI' => 'Kompetensi Sikap Spiritual',
            ),
            1 => 
            array (
                'ID_KI' => 'KI - 2',
                'NAMA_KI' => 'Kompetensi Sikap Sosial',
            ),
            2 => 
            array (
                'ID_KI' => 'KI - 3',
                'NAMA_KI' => 'Kompetensi Pengetahuan',
            ),
            3 => 
            array (
                'ID_KI' => 'KI - 4',
                'NAMA_KI' => 'Kompetensi Keterampilan',
            ),
        ));
        
        
    }
}