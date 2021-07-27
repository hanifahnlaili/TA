<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKompetensiDasarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompetensi_dasar', function (Blueprint $table) {
            $table->char('ID_KD', 10)->primary();
            $table->char('ID_MATAPELAJARAN', 10)->index('FK_MEMILIKI_1');
            $table->char('ID_TAHUNPELAJARAN', 10)->index('FK_BAGIAN_DARI_2');
            $table->char('ID_KI', 10)->index('FK_BAGIAN_DARI');
            $table->string('NAMA_KD', 10);
            $table->text('DETAIL_KD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kompetensi_dasar');
    }
}