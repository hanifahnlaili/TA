<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBukuPenghubungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('buku_penghubung', function (Blueprint $table) {
            $table->foreign('NOMOR_INDUK', 'FK_MEMILIKI_2')->references('NOMOR_INDUK')->on('detail_siswa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            // $table->foreign('ID_KI', 'FK_MEMILIKI_3')->references('ID_KI')->on('kompetensi_inti')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buku_penghubung', function (Blueprint $table) {
            $table->dropForeign('FK_MEMILIKI_2');
            // $table->dropForeign('FK_MEMILIKI_3');
        });
    }
}
