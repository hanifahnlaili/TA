<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kelas', function (Blueprint $table) {
            $table->char('ID_KELAS', 10);
            $table->char('ID_TAHUNPELAJARAN', 10)->index('FK_MENEMPATI_1');
            $table->char('ID_MATAPELAJARAN', 10)->index('FK_MENGAJAR_2');
            $table->char('NBM_PEGAWAI', 10)->index('FK_MENGAJAR_3');
            $table->primary(['ID_KELAS', 'ID_TAHUNPELAJARAN']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_kelas');
    }
}
