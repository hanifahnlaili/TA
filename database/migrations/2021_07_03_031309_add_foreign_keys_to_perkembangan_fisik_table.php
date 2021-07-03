<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPerkembanganFisikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perkembangan_fisik', function (Blueprint $table) {
            $table->foreign(['NOMOR_INDUK', 'ID_TAHUNPELAJARAN'], 'FK_MEMPUNYAI_4')->references(['NOMOR_INDUK', 'ID_TAHUNPELAJARAN'])->on('detail_siswa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perkembangan_fisik', function (Blueprint $table) {
            $table->dropForeign('FK_MEMPUNYAI_4');
        });
    }
}
