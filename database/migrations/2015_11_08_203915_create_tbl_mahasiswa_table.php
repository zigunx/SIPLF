<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblmahasiswaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_mahasiswa', function(Blueprint $table)
		{
			$table->integer('id_mahasiswa', true);
			$table->integer('id_jurusan');
			$table->integer('id_registrasi');
			$table->string('nama_mahasiswa', 150);
			$table->string('tmp_tgl_lahir', 20);
			$table->string('jenkel', 10);
			$table->string('agama', 20);
			$table->string('id_jas', 3);
			$table->string('s_kerja', 50);
			$table->string('s_nikah', 10);
			$table->string('alamat', 150);
			$table->string('no_hp', 12);
			$table->string('nama_ortu', 50);
			$table->string('nama_suis', 50);
			$table->string('pendidikan_terakhir', 10);
			$table->string('alamat_skolah', 150);
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
		Schema::drop('tbl_mahasiswa');
	}

}
