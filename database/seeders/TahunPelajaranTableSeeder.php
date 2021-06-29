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
        
        
        
    }
}