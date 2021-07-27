<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kelas')->delete();
        
        \DB::table('kelas')->insert(array (
            0 => 
            array (
                'ID_KELAS' => 'KLS101',
                'NAMA_KELAS' => 'Kelas 1 Fruit',
            ),
            1 => 
            array (
                'ID_KELAS' => 'KLS102',
                'NAMA_KELAS' => 'Kelas 1 Plant',
            ),
            2 => 
            array (
                'ID_KELAS' => 'KLS103',
                'NAMA_KELAS' => 'Kelas 1 Vegetables',
            ),
            3 => 
            array (
                'ID_KELAS' => 'KLS201',
                'NAMA_KELAS' => 'Kelas 2 Butterfly',
            ),
            4 => 
            array (
                'ID_KELAS' => 'KLS202',
                'NAMA_KELAS' => 'Kelas 2 Camel',
            ),
            5 => 
            array (
                'ID_KELAS' => 'KLS203',
                'NAMA_KELAS' => 'Kelas 2 Eagle',
            ),
            6 => 
            array (
                'ID_KELAS' => 'KLS301',
                'NAMA_KELAS' => 'Kelas 3 Jasmine',
            ),
            7 => 
            array (
                'ID_KELAS' => 'KLS302',
                'NAMA_KELAS' => 'Kelas 3 Orchid',
            ),
            8 => 
            array (
                'ID_KELAS' => 'KLS303',
                'NAMA_KELAS' => 'Kelas 3 Sunflower',
            ),
            9 => 
            array (
                'ID_KELAS' => 'KLS401',
                'NAMA_KELAS' => 'Kelas 4 Moon',
            ),
            10 => 
            array (
                'ID_KELAS' => 'KLS402',
                'NAMA_KELAS' => 'Kelas 4 Star',
            ),
            11 => 
            array (
                'ID_KELAS' => 'KLS403',
                'NAMA_KELAS' => 'Kelas 4 Sun',
            ),
            12 => 
            array (
                'ID_KELAS' => 'KLS501',
                'NAMA_KELAS' => 'Kelas 5 Andromeda',
            ),
            13 => 
            array (
                'ID_KELAS' => 'KLS502',
                'NAMA_KELAS' => 'Kelas 5 Bimasakti',
            ),
            14 => 
            array (
                'ID_KELAS' => 'KLS503',
                'NAMA_KELAS' => 'Kelas 5 Centaurus',
            ),
            15 => 
            array (
                'ID_KELAS' => 'KLS601',
                'NAMA_KELAS' => 'Kelas 6 Flash',
            ),
            16 => 
            array (
                'ID_KELAS' => 'KLS602',
                'NAMA_KELAS' => 'Kelas 6 Thunder',
            ),
            17 => 
            array (
                'ID_KELAS' => 'KLS603',
                'NAMA_KELAS' => 'Kelas 6 Wind',
            ),
        ));
        
        
    }
}