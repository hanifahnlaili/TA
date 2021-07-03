<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->char('ID_PRESTASI', 10)->primary();
            $table->char('NOMOR_INDUK', 10);
            $table->char('ID_TAHUNPELAJARAN', 10);
            $table->string('CATATAN', 20)->nullable();
            $table->string('KETERANGAN', 50)->nullable();
            $table->index(['NOMOR_INDUK', 'ID_TAHUNPELAJARAN'], 'FK_MENDAPAT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestasi');
    }
}
