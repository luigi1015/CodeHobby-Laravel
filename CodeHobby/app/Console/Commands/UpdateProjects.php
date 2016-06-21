<?php

namespace CodeHobby\Console\Commands;

use Illuminate\Console\Command;

use CodeHobby\Http\Controllers\CodeHobbyAppController;

class UpdateProjects extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'updateprojects';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Update the projects in the database from GitHub.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		CodeHobbyAppController::updateGithubProjects();
	}
}
