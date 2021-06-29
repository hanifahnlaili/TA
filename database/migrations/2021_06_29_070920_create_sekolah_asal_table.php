<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekolahAsalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolah_asal', function (Blueprint $table) {
            $table->char('ID_SEKOLAH', 10)->primary();
            $table->char('NAMA_SEKOLAH', 10);
            $table->char('ALAMAT_SEKOLAH', 10);
            $table->char('TELEPON_SEKOLAH', 10)->nullable();
            $table->string('DITERIMA_DIKELAS', 10);
            $table->date('TANGGAL_DITERIMA_DIKELAS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sekolah_asal');
    }
}
