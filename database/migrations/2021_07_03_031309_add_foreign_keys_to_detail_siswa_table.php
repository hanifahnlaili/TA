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
            $table->foreign('NOMOR_INDUK', 'FK_BAGIAN_DARI_1')->references('NOMOR_INDUK')->on('siswa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_KELAS', 'FK_MENEMPATI')->references('ID_KELAS')->on('kelas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_TAHUNPELAJARAN', 'FK_MENJALANI')->references('ID_TAHUNPELAJARAN')->on('tahun_pelajaran')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
            $table->dropForeign('FK_BAGIAN_DARI_1');
            $table->dropForeign('FK_MENEMPATI');
            $table->dropForeign('FK_MENJALANI');
        });
    }
}
