<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEkstrakurikulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekstrakurikuler', function (Blueprint $table) {
            $table->char('ID_EKSTRAKURIKULER', 10)->primary();
            $table->char('NOMOR_INDUK', 10);
            $table->char('ID_TAHUNPELAJARAN', 10);
            $table->string('KEGIATAN', 50);
            $table->string('CAPAIAN', 1);
            $table->string('DESKRIPSI', 100)->nullable();
            $table->index(['NOMOR_INDUK', 'ID_TAHUNPELAJARAN'], 'FK_MENGIKUTI');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ekstrakurikuler');
    }
}
