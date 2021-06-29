<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_siswa', function (Blueprint $table) {
            $table->string('NOMOR_INDUK', 10);
            $table->string('ID_TAHUNPELAJARAN', 10)->index('FK_RELATIONSHIP_14');
            $table->char('ID_EKSTRAKURIKULER', 10)->index('FK_RELATIONSHIP_21');
            $table->string('ID_KELAS', 10)->index('FK_RELATIONSHIP_11');
            $table->char('STATUS_KENAIKAN', 1);
            $table->primary(['NOMOR_INDUK', 'ID_TAHUNPELAJARAN']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_siswa');
    }
}
