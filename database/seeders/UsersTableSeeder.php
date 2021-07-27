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
                'id_user' => 'USR001',
                'NBM_PEGAWAI' => 'PEG01',
                'tipe_user' => '1',
                'name' => 'Tutus',
                'email' => 'tutus@gmail.com',
                'password' => '$2y$10$NOiIA3JNvFv4PQo5okruSO51nBCks6Ohj20uVO51udkWvDL2Mw0Bu',
                'updated_at' => '2021-07-23 02:05:37',
                'created_at' => '2021-07-23 02:05:37',
            ),
        ));
        
        
    }
}