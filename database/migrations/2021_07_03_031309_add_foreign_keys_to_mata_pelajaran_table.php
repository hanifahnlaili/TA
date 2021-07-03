<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMataPelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mata_pelajaran', function (Blueprint $table) {
            $table->foreign('NBM_PEGAWAI', 'FK_MENGAJAR')->references('NBM_PEGAWAI')->on('pegawai')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mata_pelajaran', function (Blueprint $table) {
            $table->dropForeign('FK_MENGAJAR');
        });
    }
}
