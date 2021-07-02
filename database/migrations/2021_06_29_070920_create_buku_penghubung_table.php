<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuPenghubungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_penghubung', function (Blueprint $table) {
            $table->char('ID_NBP', 10)->primary();
            $table->string('NOMOR_INDUK', 10);
            $table->string('ID_TAHUNPELAJARAN', 10);
            $table->integer('GURU_SPIRIT');
            $table->integer('GURU_SOSI');
            $table->integer('ORTU_SPIRIT');
            $table->integer('ORTU_SOSI');
            $table->index(['NOMOR_INDUK', 'ID_TAHUNPELAJARAN'], 'FK_RELATIONSHIP_19');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku_penghubung');
    }
}
