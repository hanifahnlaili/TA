<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKondisiKesehatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kondisi_kesehatan', function (Blueprint $table) {
            $table->foreign(['NOMOR_INDUK', 'ID_TAHUNPELAJARAN'], 'FK_MEMPUNYAI_5')->references(['NOMOR_INDUK', 'ID_TAHUNPELAJARAN'])->on('detail_siswa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kondisi_kesehatan', function (Blueprint $table) {
            $table->dropForeign('FK_MEMPUNYAI_5');
        });
    }
}
