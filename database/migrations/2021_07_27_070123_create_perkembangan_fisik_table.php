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
            $table->char('NOMOR_INDUK', 10)->index('FK_MEMPUNYAI_4');
            $table->tinyInteger('SEMESTER');
            $table->string('TINGGI_BADAN', 10)->nullable();
            $table->string('BERAT_BADAN', 10)->nullable();
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
