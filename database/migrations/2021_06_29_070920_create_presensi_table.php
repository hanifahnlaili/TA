<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->char('ID_PRESENSI', 10)->primary();
            $table->string('NOMOR_INDUK', 10);
            $table->string('ID_TAHUNPELAJARAN', 10);
            $table->integer('SAKIT')->nullable();
            $table->integer('IJIN')->nullable();
            $table->integer('ABSEN')->nullable();
            $table->index(['NOMOR_INDUK', 'ID_TAHUNPELAJARAN'], 'FK_RELATIONSHIP_12');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensi');
    }
}
