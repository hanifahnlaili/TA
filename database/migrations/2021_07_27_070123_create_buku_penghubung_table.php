<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuPenghubungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_penghubung', function (Blueprint $table) {
            $table->char('ID_NBP', 10)->primary();
            // $table->char('ID_KI', 10)->index('FK_MEMILIKI_3');
            $table->char('NOMOR_INDUK', 10)->index('FK_MEMILIKI_2');
            $table->integer('GURU_SPIRITUAL');
            $table->integer('GURU_SOSIAL');
            $table->integer('ORTU_SPIRITUAL');
            $table->integer('ORTU_SOSIAL');
            $table->text('DESKRIPSI');
            $table->text('KD_SPIRITUAL');
            $table->text('KD_SOSIAL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku_penghubung');
    }
}
