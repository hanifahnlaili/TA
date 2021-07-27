<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_kelas', function (Blueprint $table) {
            $table->foreign('ID_KELAS', 'FK_MEMPUNYAI_1')->references('ID_KELAS')->on('kelas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_TAHUNPELAJARAN', 'FK_MENEMPATI_1')->references('ID_TAHUNPELAJARAN')->on('tahun_pelajaran')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_MATAPELAJARAN', 'FK_MENGAJAR_2')->references('ID_MATAPELAJARAN')->on('mata_pelajaran')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('NBM_PEGAWAI', 'FK_MENGAJAR_3')->references('NBM_PEGAWAI')->on('pegawai')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_kelas', function (Blueprint $table) {
            $table->dropForeign('FK_MEMPUNYAI_1');
            $table->dropForeign('FK_MENEMPATI_1');
            $table->dropForeign('FK_MENGAJAR_2');
            $table->dropForeign('FK_MENGAJAR_3');
        });
    }
}
