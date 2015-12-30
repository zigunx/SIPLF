<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersyaratansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_persyaratan', function (Blueprint $table) {
            $table->increments('id_peryaratan');
            $table->integer('id_mahasiswa');
            $table->integer('id_jurusan');
            $table->integer('nama_berkas');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_persyaratan');
    }
}
