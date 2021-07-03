<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKbmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kbm', function (Blueprint $table) {
            $table->foreign('ID_MATAPELAJARAN', 'FK_MEMPUNYAI_1')->references('ID_MATAPELAJARAN')->on('mata_pelajaran')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kbm', function (Blueprint $table) {
            $table->dropForeign('FK_MEMPUNYAI_1');
        });
    }
}
