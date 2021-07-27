<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPrestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prestasi', function (Blueprint $table) {
            $table->foreign('NOMOR_INDUK', 'FK_MENDAPAT')->references('NOMOR_INDUK')->on('detail_siswa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prestasi', function (Blueprint $table) {
            $table->dropForeign('FK_MENDAPAT');
        });
    }
}
