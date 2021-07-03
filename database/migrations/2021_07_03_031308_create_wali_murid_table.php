<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaliMuridTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wali_murid', function (Blueprint $table) {
            $table->increments('ID_ORTU')->primary();
            $table->string('NAMA_AYAH', 150);
            $table->string('NAMA_IBU', 150);
            $table->string('ALAMAT_ORTU', 200);
            $table->string('TELEPON_AYAH', 13);
            $table->string('TELEPON_IBU', 13);
            $table->string('PEKERJAAN_AYAH', 100);
            $table->string('PEKERJAAN_IBU', 100);
            $table->string('NAMA_WALI', 150)->nullable();
            $table->string('ALAMAT_WALI', 200)->nullable();
            $table->string('PEKERJAAN_WALI', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wali_murid');
    }
}
