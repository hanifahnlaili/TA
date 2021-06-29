<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKompetensiDasarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kompetensi_dasar', function (Blueprint $table) {
            $table->foreign('ID_KI', 'FK_RELATIONSHIP_18')->references('ID_KI')->on('kompetensi_inti')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kompetensi_dasar', function (Blueprint $table) {
            $table->dropForeign('FK_RELATIONSHIP_18');
        });
    }
}
