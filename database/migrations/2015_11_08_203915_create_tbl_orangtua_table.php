<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblOrangTua extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_orangtua', function(Blueprint $table)
		{
			$table->integer('id_orangtua', true);
			$table->integer('id_mahasiswa',11);
			$table->integer('id_registrasi',11);
			$table->string('nama_orangtua',30);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_orangtua');
	}

}
