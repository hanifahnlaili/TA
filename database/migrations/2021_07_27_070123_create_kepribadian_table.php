<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepribadianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepribadian', function (Blueprint $table) {
            $table->char('ID_KEPRIBADIAN', 10)->primary();
            $table->char('NOMOR_INDUK', 10)->index('FK_MEMPUNYAI_6');
            $table->string('SIKAP', 1);
            $table->string('KERAJINAN', 1);
            $table->string('KEBERSIHAN_DAN_KERAPIAN', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kepribadian');
    }
}
