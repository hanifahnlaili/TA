<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pegawai', function (Blueprint $table) {
            $table->foreign('PEG_NBM_PEGAWAI', 'FK_DIKEPALAI_OLEH')->references('NBM_PEGAWAI')->on('pegawai')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_KELAS', 'FK_MEMEGANG')->references('ID_KELAS')->on('kelas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pegawai', function (Blueprint $table) {
            $table->dropForeign('FK_DIKEPALAI_OLEH');
            $table->dropForeign('FK_MEMEGANG');
        });
    }
}
