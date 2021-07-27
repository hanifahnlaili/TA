<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKompetensiDasarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kompetensi_dasar', function (Blueprint $table) {
            $table->foreign('ID_KI', 'FK_BAGIAN_DARI')->references('ID_KI')->on('kompetensi_inti')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_TAHUNPELAJARAN', 'FK_BAGIAN_DARI_2')->references('ID_TAHUNPELAJARAN')->on('tahun_pelajaran')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_MATAPELAJARAN', 'FK_MEMILIKI_1')->references('ID_MATAPELAJARAN')->on('mata_pelajaran')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kompetensi_dasar', function (Blueprint $table) {
            $table->dropForeign('FK_BAGIAN_DARI');
            $table->dropForeign('FK_BAGIAN_DARI_2');
            $table->dropForeign('FK_MEMILIKI_1');
        });
    }
}
