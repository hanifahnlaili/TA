<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KondisiKesehatanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kondisi_kesehatan')->delete();
        
        
        
    }
}