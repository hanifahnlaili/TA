<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomponenNilaiAkhirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komponen_nilai_akhir', function (Blueprint $table) {
            $table->char('ID_KOMPONEN', 10)->primary();
            $table->char('NOMOR_INDUK', 10)->index('FK_MEMPEROLEH_1');
            $table->char('ID_MATAPELAJARAN', 10)->index('FK_MEMILIKI_4');
            $table->integer('NILAI_AKHIR');
            $table->text('DESKRIPSI');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komponen_nilai_akhir');
    }
}
