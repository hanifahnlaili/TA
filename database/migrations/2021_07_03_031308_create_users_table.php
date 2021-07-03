<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->char('ID_USER', 10)->primary();
            $table->char('NBM_PEGAWAI', 10)->index('FK_MEMPUNYAI');
            $table->char('TIPE_USER', 1);
            $table->string('NAME', 50);
            $table->string('EMAIL', 100);
            $table->string('PASSWORD');
            $table->timestamp('UPDATED_AT')->useCurrent();
            $table->timestamp('CREATED_AT')->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
