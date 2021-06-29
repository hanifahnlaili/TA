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
            $table->string('ID_KBM', 10)->primary();
            $table->string('ID_MATAPELAJARAN', 10)->index('FK_RELATIONSHIP_16');
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
