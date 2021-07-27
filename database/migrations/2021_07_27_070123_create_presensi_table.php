<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->char('ID_PRESENSI', 10)->primary();
            $table->char('NOMOR_INDUK', 10)->index('FK_MEMPUNYAI_3');
            $table->integer('SAKIT')->nullable();
            $table->integer('IJIN')->nullable();
            $table->integer('ABSEN')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensi');
    }
}
