<?php

use Illuminate\Database\Seeder;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

use ListApp\Http\Controllers\ListAppController;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds for the users table.
	 *
	 * @return void
	 */
	public function run()
	{
		$user = new \CodeHobby\User();
		$user->name = "Jeff";
		$user->username = "luigi1015";
		$user->password = \Hash::make('bowser1015');
		$user->email = "";
		$user->save();
    }
}
