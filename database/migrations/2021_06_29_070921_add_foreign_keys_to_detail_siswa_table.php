<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_siswa', function (Blueprint $table) {
            $table->foreign('ID_KELAS', 'FK_RELATIONSHIP_11')->references('ID_KELAS')->on('kelas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('NOMOR_INDUK', 'FK_RELATIONSHIP_13')->references('NOMOR_INDUK')->on('siswa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_TAHUNPELAJARAN', 'FK_RELATIONSHIP_14')->references('ID_TAHUNPELAJARAN')->on('tahun_pelajaran')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_EKSTRAKURIKULER', 'FK_RELATIONSHIP_21')->references('ID_EKSTRAKURIKULER')->on('ekstrakurikuler')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_siswa', function (Blueprint $table) {
            $table->dropForeign('FK_RELATIONSHIP_11');
            $table->dropForeign('FK_RELATIONSHIP_13');
            $table->dropForeign('FK_RELATIONSHIP_14');
            $table->dropForeign('FK_RELATIONSHIP_21');
        });
    }
}
