<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id_user' => '2',
                'nbm_pegawai' => 'PEG1',
                'tipe_user' => '1',
                'name' => 'Tutus',
                'email' => 'tutus@gmail.com',
                'password' => '$2y$10$SoRk04eUChOfMof8MvO67u9PND1mEtor5ARRfY3CnG4CQZwLFicnm',
                'updated_at' => '2021-06-29 06:40:18',
                'created_at' => '2021-06-29 06:40:18',
            ),
        ));
        
        
    }
}