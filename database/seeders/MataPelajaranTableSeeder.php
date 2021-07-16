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
                'NBM_PEGAWAI' => 'PEG05',
                'NAMA_MATAPELAJARAN' => 'Al-Qur\'an Hadits',
            ),
            1 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL002',
                'NBM_PEGAWAI' => 'PEG06',
                'NAMA_MATAPELAJARAN' => 'Aqidah Akhlaq',
            ),
            2 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL003',
                'NBM_PEGAWAI' => 'PEG07',
                'NAMA_MATAPELAJARAN' => 'Tarikh Islam',
            ),
            3 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL004',
                'NBM_PEGAWAI' => 'PEG08',
                'NAMA_MATAPELAJARAN' => 'Fiqih Ibadah',
            ),
            4 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL005',
                'NBM_PEGAWAI' => 'PEG09',
                'NAMA_MATAPELAJARAN' => 'Kemuhammadiyahan',
            ),
            5 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL006',
                'NBM_PEGAWAI' => 'PEG10',
                'NAMA_MATAPELAJARAN' => 'Pendidikan Pancasila dan Kewarganegaraan',
            ),
            6 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL007',
                'NBM_PEGAWAI' => 'PEG11',
                'NAMA_MATAPELAJARAN' => 'Bahasa Indonesia',
            ),
            7 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL008',
                'NBM_PEGAWAI' => 'PEG12',
                'NAMA_MATAPELAJARAN' => 'Matematika',
            ),
            8 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL009',
                'NBM_PEGAWAI' => 'PEG13',
                'NAMA_MATAPELAJARAN' => 'Ilmu Pengetahuan Alam',
            ),
            9 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL010',
                'NBM_PEGAWAI' => 'PEG14',
                'NAMA_MATAPELAJARAN' => 'Ilmu Pengetahuan Sosial',
            ),
            10 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL011',
                'NBM_PEGAWAI' => 'PEG15',
                'NAMA_MATAPELAJARAN' => 'Seni Budaya dan Prakarya',
            ),
            11 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL012',
                'NBM_PEGAWAI' => 'PEG16',
                'NAMA_MATAPELAJARAN' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            ),
            12 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL013',
                'NBM_PEGAWAI' => 'PEG17',
                'NAMA_MATAPELAJARAN' => 'Bahasa Jawa',
            ),
            13 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL014',
                'NBM_PEGAWAI' => 'PEG18',
                'NAMA_MATAPELAJARAN' => 'Bahasa Arab',
            ),
            14 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL015',
                'NBM_PEGAWAI' => 'PEG19',
                'NAMA_MATAPELAJARAN' => 'Bahasa Inggris',
            ),
            15 => 
            array (
                'ID_MATAPELAJARAN' => 'MPL016',
                'NBM_PEGAWAI' => 'PEG20',
                'NAMA_MATAPELAJARAN' => 'Teknologi Informasi dan Komunikasi',
            ),
        ));
        
        
    }
}