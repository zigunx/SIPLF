<?php

use Illuminate\Database\Seeder;
use App\User;

class TblKepegawaianTableSeeder extends Seeder {

	public function run()
	{
		// User::truncate();
		User::create([

			'nip' => '123453539',
			'nama_user' => 'Admin',
			'jk' => 'L',
			'status' => 'admin',
			'username' => '123456',
			'password' => Hash::make( '123456' ),

		]);

	}

}
