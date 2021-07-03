<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailMataPelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_mata_pelajaran', function (Blueprint $table) {
            $table->foreign('ID_TAHUNPELAJARAN', 'FK_MEMILIKI_2')->references('ID_TAHUNPELAJARAN')->on('tahun_pelajaran')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_MATAPELAJARAN', 'FK_MEMPUNYAI_2')->references('ID_MATAPELAJARAN')->on('mata_pelajaran')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_mata_pelajaran', function (Blueprint $table) {
            $table->dropForeign('FK_MEMILIKI_2');
            $table->dropForeign('FK_MEMPUNYAI_2');
        });
    }
}
