<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKomponenNilaiTengahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komponen_nilai_tengah', function (Blueprint $table) {
            $table->foreign('ID_KD', 'FK_MEMILIKI')->references('ID_KD')->on('kompetensi_dasar')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('NOMOR_INDUK', 'FK_MEMPEROLEH')->references('NOMOR_INDUK')->on('siswa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_RANGE_NILAI', 'FK_MENGANDUNG')->references('ID_RANGE_NILAI')->on('range_nilai')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komponen_nilai_tengah', function (Blueprint $table) {
            $table->dropForeign('FK_MEMILIKI');
            $table->dropForeign('FK_MEMPEROLEH');
            $table->dropForeign('FK_MENGANDUNG');
        });
    }
}
