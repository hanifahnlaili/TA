<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailMataPelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_mata_pelajaran', function (Blueprint $table) {
            $table->char('ID_TAHUNPELAJARAN', 10);
            $table->char('ID_MATAPELAJARAN', 10)->index('FK_MEMPUNYAI_2');
            $table->string('KETERANGAN', 50);
            $table->primary(['ID_TAHUNPELAJARAN', 'ID_MATAPELAJARAN']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_mata_pelajaran');
    }
}
