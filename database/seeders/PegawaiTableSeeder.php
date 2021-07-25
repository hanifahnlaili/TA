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
        

        \DB::table('users')->truncate();

        \DB::table('pegawai')->insert(array (
            array (
                'NBM_PEGAWAI' => 'PEG04',
                'PEG_NBM_PEGAWAI' => NULL,
                'NAMA_PEGAWAI' => 'Cahyo Iswahyudi, S.Pd',
                'ALAMAT_PEGAWAI' => 'Jl Rajawali 26',
                'TELP_PEGAWAI' => '082273124381',
                'JABATAN_PEGAWAI' => 'Kepala Sekolah',
                'GENDER_PEGAWAI' => 'L',
                'FOTO_PEGAWAI' => NULL,
            ),
        ));
        
        \DB::table('pegawai')->insert(array (
            0 => 
            array (
                'NBM_PEGAWAI' => 'PEG01',
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Marathus Sholihah, S.Pd',
                'ALAMAT_PEGAWAI' => 'Jl Manyar Kertoarjo 48',
                'TELP_PEGAWAI' => '081831081549',
                'JABATAN_PEGAWAI' => 'Admin Kurikulum',
                'GENDER_PEGAWAI' => 'P',
                'FOTO_PEGAWAI' => NULL,
            ),
            1 => 
            array (
                'NBM_PEGAWAI' => 'PEG02',
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Dra. Siti Uzlah',
                'ALAMAT_PEGAWAI' => 'Jl Ketintang Madya 92',
                'TELP_PEGAWAI' => '081560902342',
                'JABATAN_PEGAWAI' => 'Unit AIKA ?Plus?',
                'GENDER_PEGAWAI' => 'L',
                'FOTO_PEGAWAI' => NULL,
            ),
            2 => 
            array (
                'NBM_PEGAWAI' => 'PEG03',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Asrilia Kurniasari, S.T',
                'ALAMAT_PEGAWAI' => 'Jl Indrapura 5',
                'TELP_PEGAWAI' => '082235554684',
                'JABATAN_PEGAWAI' => 'Kaur KURIKULUM',
                'GENDER_PEGAWAI' => 'P',
                'FOTO_PEGAWAI' => NULL,
            ),
            3 => 
            array (
                'NBM_PEGAWAI' => 'PEG05',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Desy Kriswintari M.Pd',
                'ALAMAT_PEGAWAI' => 'Jl Cempaka Putih Tmr XVII 6',
                'TELP_PEGAWAI' => '083865375631',
                'JABATAN_PEGAWAI' => 'Guru Al-Qur\'an Hadits',
                'GENDER_PEGAWAI' => 'P',
                'FOTO_PEGAWAI' => NULL,
            ),
            4 => 
            array (
                'NBM_PEGAWAI' => 'PEG06',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Panca Indrawati,S.Pd',
                'ALAMAT_PEGAWAI' => 'Jl Buncit Raya 4',
                'TELP_PEGAWAI' => '081905017120',
                'JABATAN_PEGAWAI' => 'Guru Aqidah Akhlaq',
                'GENDER_PEGAWAI' => 'P',
                'FOTO_PEGAWAI' => NULL,
            ),
            5 => 
            array (
                'NBM_PEGAWAI' => 'PEG07',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Mitha Rizky R, S.Hum',
                'ALAMAT_PEGAWAI' => 'Komplek Taman Ratu Bl B-5/2',
                'TELP_PEGAWAI' => '083128334088',
                'JABATAN_PEGAWAI' => 'Guru Tarikh Islam',
                'GENDER_PEGAWAI' => 'P',
                'FOTO_PEGAWAI' => NULL,
            ),
            6 => 
            array (
                'NBM_PEGAWAI' => 'PEG08',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Rahmad Sholeh, S.Pd',
                'ALAMAT_PEGAWAI' => 'Jl Melati Putih 45',
                'TELP_PEGAWAI' => '083127948283',
                'JABATAN_PEGAWAI' => 'Guru Fiqih Ibadah',
                'GENDER_PEGAWAI' => 'L',
                'FOTO_PEGAWAI' => NULL,
            ),
            7 => 
            array (
                'NBM_PEGAWAI' => 'PEG09',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Siti Uswahtun K, S.Pd',
                'ALAMAT_PEGAWAI' => 'Jl Jend. Ahmad Yani No.14',
                'TELP_PEGAWAI' => '083865326472',
                'JABATAN_PEGAWAI' => 'Guru Kemuhammadiyahan',
                'GENDER_PEGAWAI' => 'P',
                'FOTO_PEGAWAI' => NULL,
            ),
            8 => 
            array (
                'NBM_PEGAWAI' => 'PEG10',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Hj Umi Fadilah, S.Ag',
                'ALAMAT_PEGAWAI' => 'Jl Raya Ceger 1',
                'TELP_PEGAWAI' => '083865375800',
                'JABATAN_PEGAWAI' => 'Guru Pendidikan Pancasila dan Kewarganegaraan',
                'GENDER_PEGAWAI' => 'P',
                'FOTO_PEGAWAI' => NULL,
            ),
            9 => 
            array (
                'NBM_PEGAWAI' => 'PEG11',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Nur Fadhilah, S.Pd.I',
                'ALAMAT_PEGAWAI' => 'Jl H Juanda Raya 95',
                'TELP_PEGAWAI' => '083128334361',
                'JABATAN_PEGAWAI' => 'Guru Bahasa Indonesia',
                'GENDER_PEGAWAI' => 'P',
                'FOTO_PEGAWAI' => NULL,
            ),
            10 => 
            array (
                'NBM_PEGAWAI' => 'PEG12',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Cholifah, S.S',
                'ALAMAT_PEGAWAI' => 'Jl Blunyah Gede 106',
                'TELP_PEGAWAI' => '083865375609',
                'JABATAN_PEGAWAI' => 'Guru Matematika',
                'GENDER_PEGAWAI' => 'L',
                'FOTO_PEGAWAI' => NULL,
            ),
            11 => 
            array (
                'NBM_PEGAWAI' => 'PEG13',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Ainul Rofiq, S.Pd.M.Pd.I',
                'ALAMAT_PEGAWAI' => 'Jl Kebantenan 3/2',
                'TELP_PEGAWAI' => '081905013973',
                'JABATAN_PEGAWAI' => 'Guru Ilmu Pengetahuan Alam',
                'GENDER_PEGAWAI' => 'L',
                'FOTO_PEGAWAI' => NULL,
            ),
            12 => 
            array (
                'NBM_PEGAWAI' => 'PEG14',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Farrin Dyota R., S.Hum',
                'ALAMAT_PEGAWAI' => 'Jl Petemon Barat 200',
                'TELP_PEGAWAI' => '085574670577',
                'JABATAN_PEGAWAI' => 'Guru Ilmu Pengetahuan Sosial',
                'GENDER_PEGAWAI' => 'P',
                'FOTO_PEGAWAI' => NULL,
            ),
            13 => 
            array (
                'NBM_PEGAWAI' => 'PEG15',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Muhammad Zainuddin, S.Pd',
                'ALAMAT_PEGAWAI' => 'Jl Raya Jemursari 234',
                'TELP_PEGAWAI' => '083865375631',
                'JABATAN_PEGAWAI' => 'Guru Seni Budaya dan Prakarya',
                'GENDER_PEGAWAI' => 'L',
                'FOTO_PEGAWAI' => NULL,
            ),
            14 => 
            array (
                'NBM_PEGAWAI' => 'PEG16',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Halim S.Pd',
                'ALAMAT_PEGAWAI' => 'Jl Kayumanis IV/99',
                'TELP_PEGAWAI' => '085755588947',
                'JABATAN_PEGAWAI' => 'Guru Pendidikan Jasmani, Olahraga, dan Kesehatan',
                'GENDER_PEGAWAI' => 'L',
                'FOTO_PEGAWAI' => NULL,
            ),
            15 => 
            array (
                'NBM_PEGAWAI' => 'PEG17',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Elawati , S.Pd',
                'ALAMAT_PEGAWAI' => 'Jl Klampis Jaya 10 B',
                'TELP_PEGAWAI' => '085355529186',
                'JABATAN_PEGAWAI' => 'Guru Bahasa Jawa',
                'GENDER_PEGAWAI' => 'P',
                'FOTO_PEGAWAI' => NULL,
            ),
            16 => 
            array (
                'NBM_PEGAWAI' => 'PEG18',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Khoirur Rozikin, S.Pd.I',
                'ALAMAT_PEGAWAI' => 'Jl Sukanagara 21',
                'TELP_PEGAWAI' => '081955593047',
                'JABATAN_PEGAWAI' => 'Guru Bahasa Arab',
                'GENDER_PEGAWAI' => 'L',
                'FOTO_PEGAWAI' => NULL,
            ),
            17 => 
            array (
                'NBM_PEGAWAI' => 'PEG19',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Dra. Suprihatin, M.Pd.I',
                'ALAMAT_PEGAWAI' => 'Jl Argopuro 11 A',
                'TELP_PEGAWAI' => '087603147809',
                'JABATAN_PEGAWAI' => 'Guru Bahasa Inggris',
                'GENDER_PEGAWAI' => 'P',
                'FOTO_PEGAWAI' => NULL,
            ),
            18 => 
            array (
                'NBM_PEGAWAI' => 'PEG20',
                
                'PEG_NBM_PEGAWAI' => 'PEG04',
                'NAMA_PEGAWAI' => 'Baroroh Berlian Novantika, S.E',
                'ALAMAT_PEGAWAI' => 'Jl Banda 42',
                'TELP_PEGAWAI' => '084089635581',
                'JABATAN_PEGAWAI' => 'Guru Teknologi Informasi dan Komunikasi',
                'GENDER_PEGAWAI' => 'P',
                'FOTO_PEGAWAI' => NULL,
            ),
        ));
        
        
    }
}