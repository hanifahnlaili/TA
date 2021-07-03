<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->char('NOMOR_INDUK', 10)->primary();
            $table->char('ID_ORTU', 5)->index('FK_MEMBUTUHKAN');
            $table->char('ID_SEKOLAH', 10)->index('FK_BERASAL');
            $table->string('NAMA_SISWA', 150);
            $table->string('NISN_SISWA', 20);
            $table->tinyInteger('JENIS_KELAMIN');
            $table->string('TEMPAT_TANGGAL_LAHIR', 50);
            $table->string('AGAMA', 15);
            $table->char('ANAK_KE', 2);
            $table->string('STATUS_DALAM_KELUARGA', 20);
            $table->string('ALAMAT', 200);
            $table->string('TELEPON', 13)->nullable();
            $table->string('FOTO', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
