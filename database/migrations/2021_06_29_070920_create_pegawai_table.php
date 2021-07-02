<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->char('NBM_PEGAWAI', 10)->primary();
            $table->string('PEG_NBM_PEGAWAI', 10)->nullable()->index('FK_RELATIONSHIP_27');
            $table->string('NAMA_PEGAWAI', 150);
            $table->string('ALAMAT_PEGAWAI', 200);
            $table->string('TELP_PEGAWAI', 13);
            $table->string('JABATAN_PEGAWAI', 100);
            $table->string('GENDER_PEGAWAI', 1);
            $table->string('FOTO_PEGAWAI', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
