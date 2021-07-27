<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKondisiKesehatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisi_kesehatan', function (Blueprint $table) {
            $table->char('ID_KONDISI_KESEHATAN', 10)->primary();
            $table->char('NOMOR_INDUK', 10)->index('FK_MEMPUNYAI_5');
            $table->tinyInteger('SEMESTER');
            $table->string('PENDENGARAN', 10)->nullable();
            $table->string('PENGLIHATAN', 10)->nullable();
            $table->string('GIGI', 10)->nullable();
            $table->string('LAINNYA', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kondisi_kesehatan');
    }
}
