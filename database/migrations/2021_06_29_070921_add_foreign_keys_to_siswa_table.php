<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->foreign('ID_ORTU', 'FK_RELATIONSHIP_17')->references('ID_ORTU')->on('wali_murid')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_SEKOLAH', 'FK_RELATIONSHIP_31')->references('ID_SEKOLAH')->on('sekolah_asal')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropForeign('FK_RELATIONSHIP_17');
            $table->dropForeign('FK_RELATIONSHIP_31');
        });
    }
}
