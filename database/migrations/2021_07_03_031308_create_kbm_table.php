<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKbmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kbm', function (Blueprint $table) {
            $table->char('ID_KBM', 10)->primary();
            $table->char('ID_MATAPELAJARAN', 10)->index('FK_MEMPUNYAI_1');
            $table->string('NILAI_KBM', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kbm');
    }
}
