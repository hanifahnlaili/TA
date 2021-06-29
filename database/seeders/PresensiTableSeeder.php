<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PresensiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('presensi')->delete();
        
        
        
    }
}