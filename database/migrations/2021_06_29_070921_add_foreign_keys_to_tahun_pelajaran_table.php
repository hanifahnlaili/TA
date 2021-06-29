<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTahunPelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tahun_pelajaran', function (Blueprint $table) {
            $table->foreign('ID_BULAN', 'FK_RELATIONSHIP_15')->references('ID_BULAN')->on('bulan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tahun_pelajaran', function (Blueprint $table) {
            $table->dropForeign('FK_RELATIONSHIP_15');
        });
    }
}
