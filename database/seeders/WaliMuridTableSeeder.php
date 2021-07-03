<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class WaliMuridTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wali_murid')->delete();
        
        $faker = Faker::create('id_ID');

        $ortu = [];

        for($i = 0; $i < 35; $i++){
            $ortu[] = [
                'ID_ORTU' => $faker->numberBetween(1,36),
                'NAMA_AYAH' => $faker->name('male'),
                'NAMA_IBU' => $faker->name('female'),
                'ALAMAT_ORTU' => $faker->address,
                'TELEPON_AYAH' => $faker->numberBetween(1000000000000,9999999999999),
                'TELEPON_IBU' => $faker->numberBetween(1000000000000,9999999999999),
                'PEKERJAAN_AYAH' => $faker->jobTitle,
                'PEKERJAAN_IBU' =>$faker->jobTitle,
                'NAMA_WALI' => NULL,
                'ALAMAT_WALI' => NULL,
                'PEKERJAAN_WALI' => NULL
            ];

        }

        \DB::table('wali_murid')->insert($ortu);
        
        
    }
}