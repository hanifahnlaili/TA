<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('userpengguna')->insert([
            'id_user' => 11,
            'username' => "ifa",
            'password' => bcrypt('ifa28')
        ]);
    }
}
