<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailMapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_mapel', function (Blueprint $table) {
            $table->string('ID_TAHUNPELAJARAN', 10);
            $table->string('ID_MATAPELAJARAN', 10)->index('FK_RELATIONSHIP_29');
            $table->string('ID_KD', 10)->nullable()->index('FK_RELATIONSHIP_30');
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
        Schema::dropIfExists('detail_mapel');
    }
}
