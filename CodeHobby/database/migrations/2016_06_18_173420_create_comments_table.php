<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
	/**
	 * Run the comments table migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function (Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('ipaddress');
			$table->string('email');
			$table->text('comment');
		});
	}

	/**
	 * Reverse the comments table migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}
}
