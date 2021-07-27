<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SekolahAsalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sekolah_asal')->delete();
        
        \DB::table('sekolah_asal')->insert(array (
            0 => 
            array (
                'ID_SEKOLAH' => 'SCH0001',
                'NAMA_SEKOLAH' => 'TK AISYIYAH 6',
                'ALAMAT_SEKOLAH' => 'Jl. Mulyorejo 100, Surabaya',
                'TELEPON_SEKOLAH' => NULL,
            ),
            1 => 
            array (
                'ID_SEKOLAH' => 'SCH0002',
                'NAMA_SEKOLAH' => 'TK AISYIYAH 47',
                'ALAMAT_SEKOLAH' => 'Jl. Kalijudan Asri Kav 32 No.64, Surabaya',
                'TELEPON_SEKOLAH' => NULL,
            ),
            2 => 
            array (
                'ID_SEKOLAH' => 'SCH0003',
                'NAMA_SEKOLAH' => 'TK AISYIYAH 45',
                'ALAMAT_SEKOLAH' => 'Jl. Gubeng Kertajaya IX C / 47, Surabaya',
                'TELEPON_SEKOLAH' => NULL,
            ),
            3 => 
            array (
                'ID_SEKOLAH' => 'SCH0004',
                'NAMA_SEKOLAH' => 'TK AISYIYAH 32',
                'ALAMAT_SEKOLAH' => 'JL. MOJO KIDUL NO. 3, SURABAYA',
                'TELEPON_SEKOLAH' => NULL,
            ),
            4 => 
            array (
                'ID_SEKOLAH' => 'SCH0005',
                'NAMA_SEKOLAH' => 'TK AISYIYAH 58',
                'ALAMAT_SEKOLAH' => 'Jl. Tempurejo no 1, Surabaya',
                'TELEPON_SEKOLAH' => NULL,
            ),
        ));
        
        
    }
}