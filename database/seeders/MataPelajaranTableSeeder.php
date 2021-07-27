<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MataPelajaranTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mata_pelajaran')->delete();
        
        \DB::table('mata_pelajaran')->insert(array (
            0 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL001',
                'NAMA_MATAPELAJARAN' => 'Al-Qur\'an Hadits',
                'NILAI_KBM' => '76',
            ),
            1 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL002',
                'NAMA_MATAPELAJARAN' => 'Aqidah Akhlaq',
                'NILAI_KBM' => '76',
            ),
            2 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL003',
                'NAMA_MATAPELAJARAN' => 'Tarikh Islam',
                'NILAI_KBM' => '80',
            ),
            3 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL004',
                'NAMA_MATAPELAJARAN' => 'Fiqih Ibadah',
                'NILAI_KBM' => '76',
            ),
            4 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL005',
                'NAMA_MATAPELAJARAN' => 'Kemuhammadiyahan',
                'NILAI_KBM' => '76',
            ),
            5 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL006',
                'NAMA_MATAPELAJARAN' => 'Pendidikan Pancasila dan Kewarganegaraan',
                'NILAI_KBM' => '84',
            ),
            6 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL007',
                'NAMA_MATAPELAJARAN' => 'Bahasa Indonesia',
                'NILAI_KBM' => '79',
            ),
            7 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL008',
                'NAMA_MATAPELAJARAN' => 'Matematika',
                'NILAI_KBM' => '82',
            ),
            8 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL009',
                'NAMA_MATAPELAJARAN' => 'Ilmu Pengetahuan Alam',
                'NILAI_KBM' => '80',
            ),
            9 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL010',
                'NAMA_MATAPELAJARAN' => 'Ilmu Pengetahuan Sosial',
                'NILAI_KBM' => '80',
            ),
            10 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL011',
                'NAMA_MATAPELAJARAN' => 'Seni Budaya dan Prakarya',
                'NILAI_KBM' => '81',
            ),
            11 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL012',
                'NAMA_MATAPELAJARAN' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
                'NILAI_KBM' => '82',
            ),
            12 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL013',
                'NAMA_MATAPELAJARAN' => 'Bahasa Jawa',
                'NILAI_KBM' => '80',
            ),
            13 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL014',
                'NAMA_MATAPELAJARAN' => 'Bahasa Arab',
                'NILAI_KBM' => '80',
            ),
            14 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL015',
                'NAMA_MATAPELAJARAN' => 'Bahasa Inggris',
                'NILAI_KBM' => '80',
            ),
            15 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL016',
                'NAMA_MATAPELAJARAN' => 'Teknologi Informasi dan Komunikasi',
                'NILAI_KBM' => '79',
            ),
        ));
        
        
    }
}