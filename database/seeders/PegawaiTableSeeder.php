<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PegawaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pegawai')->delete();
        
        \DB::table('pegawai')->insert(array ( 
            'NBM_PEGAWAI' => 'PEG4',
            'PEG_NBM_PEGAWAI' => NULL,
            'NAMA_PEGAWAI' => 'Cahyo Iswahyudi, S.Pd',
            'ALAMAT_PEGAWAI' => 'Jl Rajawali 26',
            'TELP_PEGAWAI' => '08227312438',
            'JABATAN_PEGAWAI' => 'Kepala Sekolah',
            'GENDER_PEGAWAI' => 'L',
            'FOTO_PEGAWAI' => NULL,
        ));

        \DB::table('pegawai')->insert(array (
            0 => 
            array (
                'NBM_PEGAWAI' => 'PEG1',
                'PEG_NBM_PEGAWAI' => 'PEG4',
                'NAMA_PEGAWAI' => 'Marathus Sholihah, S.Pd',
                'ALAMAT_PEGAWAI' => 'Jl Manyar Kertoarjo 48',
                'TELP_PEGAWAI' => '0818310815',
                'JABATAN_PEGAWAI' => 'Admin Kurikulum',
                'GENDER_PEGAWAI' => 'P',
                'FOTO_PEGAWAI' => NULL,
            ),
            1 => 
            array (
                'NBM_PEGAWAI' => 'PEG2',
                'PEG_NBM_PEGAWAI' => 'PEG4',
                'NAMA_PEGAWAI' => 'Halim S.Pd',
                'ALAMAT_PEGAWAI' => 'Jl Ketintang Madya 92',
                'TELP_PEGAWAI' => '0815609023',
                'JABATAN_PEGAWAI' => 'Guru Matematika',
                'GENDER_PEGAWAI' => 'L',
                'FOTO_PEGAWAI' => NULL,
            ),
            2 => 
            array (
                'NBM_PEGAWAI' => 'PEG3',
                'PEG_NBM_PEGAWAI' => 'PEG4',
                'NAMA_PEGAWAI' => 'Asrilia Kurniasari, S.T',
                'ALAMAT_PEGAWAI' => 'Jl Indrapura 5',
                'TELP_PEGAWAI' => '08223555468',
                'JABATAN_PEGAWAI' => 'Kaur KURIKULUM',
                'GENDER_PEGAWAI' => 'P',
                'FOTO_PEGAWAI' => NULL,
            ),
            // 3 => 
            // array (
            //     'NBM_PEGAWAI' => 'PEG4',
            //     'PEG_NBM_PEGAWAI' => 'NBM_PEGAWAI','',
            //     'NAMA_PEGAWAI' => 'Cahyo Iswahyudi, S.Pd',
            //     'ALAMAT_PEGAWAI' => 'Jl Rajawali 26',
            //     'TELP_PEGAWAI' => '08227312438',
            //     'JABATAN_PEGAWAI' => 'Kepala Sekolah',
            //     'GENDER_PEGAWAI' => 'L',
            //     'FOTO_PEGAWAI' => NULL,
            // ),
        ));
        
        
    }
}