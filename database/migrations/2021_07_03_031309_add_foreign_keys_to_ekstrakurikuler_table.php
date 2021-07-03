<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEkstrakurikulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ekstrakurikuler', function (Blueprint $table) {
            $table->foreign(['NOMOR_INDUK', 'ID_TAHUNPELAJARAN'], 'FK_MENGIKUTI')->references(['NOMOR_INDUK', 'ID_TAHUNPELAJARAN'])->on('detail_siswa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ekstrakurikuler', function (Blueprint $table) {
            $table->dropForeign('FK_MENGIKUTI');
        });
    }
}
