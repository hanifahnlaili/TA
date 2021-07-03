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
            $table->char('ID_KI', 10)->index('FK_BAGIAN_DARI');
            $table->char('ID_TAHUNPELAJARAN', 10);
            $table->char('ID_MATAPELAJARAN', 10);
            $table->string('NAMA_KD', 10);
            $table->text('DETAIL_KD');
            $table->index(['ID_TAHUNPELAJARAN', 'ID_MATAPELAJARAN'], 'FK_MEMILIKI_1');
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
