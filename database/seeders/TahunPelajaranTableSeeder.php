<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TahunPelajaranTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tahun_pelajaran')->delete();
        
        \DB::table('tahun_pelajaran')->insert(array (
            0 => 
            array (
                'ID_TAHUNPELAJARAN' => 'TPL0001',
                'TAHUNPELAJARAN' => '2019 - 2020',
                'SEMESTER' => 1,
            ),
            1 => 
            array (
                'ID_TAHUNPELAJARAN' => 'TPL0002',
                'TAHUNPELAJARAN' => '2019 - 2020',
                'SEMESTER' => 2,
            ),
            2 => 
            array (
                'ID_TAHUNPELAJARAN' => 'TPL0003',
                'TAHUNPELAJARAN' => '2020 - 2021',
                'SEMESTER' => 1,
            ),
            3 => 
            array (
                'ID_TAHUNPELAJARAN' => 'TPL0004',
                'TAHUNPELAJARAN' => '2020 - 2021',
                'SEMESTER' => 2,
            ),
            4 => 
            array (
                'ID_TAHUNPELAJARAN' => 'TPL0005',
                'TAHUNPELAJARAN' => '2021 - 2022',
                'SEMESTER' => 1,
            ),
            5 => 
            array (
                'ID_TAHUNPELAJARAN' => 'TPL0006',
                'TAHUNPELAJARAN' => '2021 - 2022',
                'SEMESTER' => 2,
            ),
        ));
        
        
    }
}