<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PegawaiTableSeeder::class);
        $this->call(UsersTableSeeder::class);      
        $this->call(WaliMuridTableSeeder::class);
        $this->call(BukuPenghubungTableSeeder::class);
        $this->call(DetailMataPelajaranTableSeeder::class);
        $this->call(DetailSiswaTableSeeder::class);
        $this->call(EkstrakurikulerTableSeeder::class);
        $this->call(KbmTableSeeder::class);
        $this->call(KelasTableSeeder::class);
        $this->call(KepribadianTableSeeder::class);
        $this->call(KompetensiDasarTableSeeder::class);
        $this->call(KompetensiIntiTableSeeder::class);
        $this->call(KondisiKesehatanTableSeeder::class);
        $this->call(MataPelajaranTableSeeder::class);
        $this->call(PerkembanganFisikTableSeeder::class);
        $this->call(PresensiTableSeeder::class);
        $this->call(PrestasiTableSeeder::class);
        $this->call(SekolahAsalTableSeeder::class);
        $this->call(SiswaTableSeeder::class);
        $this->call(TahunPelajaranTableSeeder::class);  
    }
}
