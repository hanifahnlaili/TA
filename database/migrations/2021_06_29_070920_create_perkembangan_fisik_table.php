<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkembanganFisikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkembangan_fisik', function (Blueprint $table) {
            $table->char('ID_PERKEMBANGAN_FISIK', 10)->primary();
            $table->string('NOMOR_INDUK', 10);
            $table->string('ID_TAHUNPELAJARAN', 10);
            $table->tinyInteger('SEMESTER');
            $table->string('TINGGI_BADAN', 10)->nullable();
            $table->string('BERAT_BADAN', 10)->nullable();
            $table->index(['NOMOR_INDUK', 'ID_TAHUNPELAJARAN'], 'FK_RELATIONSHIP_22');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perkembangan_fisik');
    }
}
