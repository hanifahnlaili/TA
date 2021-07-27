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
            $table->char('id_user', 10)->primary();
            $table->char('NBM_PEGAWAI', 10)->index('FK_MEMPUNYAI');
            $table->char('tipe_user', 1);
            $table->string('name', 50);
            $table->string('email', 100);
            $table->string('password');
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->default('0000-00-00 00:00:00');
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
