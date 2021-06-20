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
        \DB::table('users')->insert([
            // $table->integer('id_user');
            // $table->boolean('tipe_user');
            // $table->string('name');
            // $table->string('email');
            // $table->string('password');
            // $table->timestamp('updated_at')->nullable();
            // $table->timestamp('created_at');
            'id_user' => "1",
            'tipe_user' => "1",
            'name' => "ifa2",
            'email' => "ifa2@gmail.com",
            'password' => bcrypt('ifa2'),
            'updated_at' => date('Y-m-d h:i:s'),
            'created_at' => date('Y-m-d h:i:s')
        ]);
    }
}
