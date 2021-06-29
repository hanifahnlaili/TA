<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailMapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_mapel', function (Blueprint $table) {
            $table->foreign('ID_TAHUNPELAJARAN', 'FK_RELATIONSHIP_28')->references('ID_TAHUNPELAJARAN')->on('tahun_pelajaran')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_MATAPELAJARAN', 'FK_RELATIONSHIP_29')->references('ID_MATAPELAJARAN')->on('mata_pelajaran')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_KD', 'FK_RELATIONSHIP_30')->references('ID_KD')->on('kompetensi_dasar')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_mapel', function (Blueprint $table) {
            $table->dropForeign('FK_RELATIONSHIP_28');
            $table->dropForeign('FK_RELATIONSHIP_29');
            $table->dropForeign('FK_RELATIONSHIP_30');
        });
    }
}
