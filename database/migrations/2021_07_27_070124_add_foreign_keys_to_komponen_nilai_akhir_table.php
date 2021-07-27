<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKomponenNilaiAkhirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komponen_nilai_akhir', function (Blueprint $table) {
            $table->foreign('ID_MATAPELAJARAN', 'FK_MEMILIKI_4')->references('ID_MATAPELAJARAN')->on('mata_pelajaran')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('NOMOR_INDUK', 'FK_MEMPEROLEH_1')->references('NOMOR_INDUK')->on('siswa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komponen_nilai_akhir', function (Blueprint $table) {
            $table->dropForeign('FK_MEMILIKI_4');
            $table->dropForeign('FK_MEMPEROLEH_1');
        });
    }
}
