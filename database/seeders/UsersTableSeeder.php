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
        

        \DB::table('users')->truncate();
        
        \DB::table('users')->insert([
            // 'id_user' => 'USR001',
            'NBM_PEGAWAI' => 'PEG01',
            'tipe_user' => '1',
            'name' => 'Tutus',
            'email' => 'tutus@gmail.com',
            'password'=> bcrypt('tutus'),
            'updated_at' => date('Y-m-d h:i:s'),
            'created_at' => date('Y-m-d h:i:s'),
        ]);
        
    }
}