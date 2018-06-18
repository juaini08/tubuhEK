<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('ek_id');
            $table->string('nama_pengguna');
            $table->string('no_pekerja');
            $table->integer('tel_pej');
            $table->integer('tel_hp');
            $table->string('emel');
            $table->integer('fakulti_id');
            $table->integer('lulusan_id');
            $table->integer('role_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penggunas');
    }
}
