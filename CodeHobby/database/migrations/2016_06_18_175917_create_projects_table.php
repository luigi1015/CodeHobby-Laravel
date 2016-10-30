<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
	/**
	 * Run the migration for the projects table.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function (Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('githubid')->unique();
			$table->string('name');
			$table->string('fullname');
			$table->string('htmlurl');
			$table->string('description')->nullable();
		});
	}

	/**
	 * Reverse the migration for the projects table.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}
}
