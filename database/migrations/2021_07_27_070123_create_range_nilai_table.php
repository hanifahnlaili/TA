<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRangeNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('range_nilai', function (Blueprint $table) {
            $table->char('ID_RANGE_NILAI', 10)->primary();
            $table->string('RANGE_HURUF', 1);
            $table->string('KETERANGAN', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('range_nilai');
    }
}
