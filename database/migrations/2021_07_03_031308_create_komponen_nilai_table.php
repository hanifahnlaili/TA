<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomponenNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komponen_nilai', function (Blueprint $table) {
            $table->char('ID_KOMPONEN', 10)->primary();
            $table->char('NOMOR_INDUK', 10)->index('FK_MEMPEROLEH');
            $table->char('ID_KD', 10)->index('FK_MEMILIKI');
            $table->char('ID_RANGE_NILAI', 10)->index('FK_MENGANDUNG');
            $table->integer('NILAI_ANGKA');
            $table->string('DESKRIPSI', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komponen_nilai');
    }
}
