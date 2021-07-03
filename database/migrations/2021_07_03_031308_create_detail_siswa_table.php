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
            $table->char('NOMOR_INDUK', 10);
            $table->char('ID_TAHUNPELAJARAN', 10)->index('FK_MENJALANI');
            $table->char('ID_KELAS', 10)->index('FK_MENEMPATI');
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
