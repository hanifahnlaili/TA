<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->char('ID_PRESTASI', 10)->primary();
            $table->string('NOMOR_INDUK', 10);
            $table->string('ID_TAHUNPELAJARAN', 10);
            $table->string('CATATAN', 20)->nullable();
            $table->string('KETERANGAN', 20)->nullable();
            $table->index(['NOMOR_INDUK', 'ID_TAHUNPELAJARAN'], 'FK_RELATIONSHIP_24');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestasi');
    }
}
