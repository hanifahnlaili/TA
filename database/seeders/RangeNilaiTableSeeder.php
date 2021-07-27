<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RangeNilaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('range_nilai')->delete();
        
        \DB::table('range_nilai')->insert(array (
            0 => 
            array (
                'ID_RANGE_NILAI' => 'RGN001',
                'RANGE_HURUF' => 'A',
                'KETERANGAN' => 'Terlampaui',
            ),
            1 => 
            array (
                'ID_RANGE_NILAI' => 'RGN002',
                'RANGE_HURUF' => 'B',
                'KETERANGAN' => 'Belum Tercapai',
            ),
            2 => 
            array (
                'ID_RANGE_NILAI' => 'RGN003',
                'RANGE_HURUF' => 'C',
                'KETERANGAN' => 'Cukup',
            ),
        ));
        
        
    }
}