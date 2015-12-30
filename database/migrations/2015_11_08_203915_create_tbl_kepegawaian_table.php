<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblKepegawaianTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_administrator', function(Blueprint $table)
		{
			$table->integer('id_user', true);
			$table->string('nama_user', 100);
			$table->string('jk', 1);
			$table->string('status', 50);
			$table->string('username', 100);
			$table->string('password', 100);
			$table->string('remember_token', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_administrator');
	}

}
