<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
	/**
	 * Run the database seed for the projects table.
	 *
	 * @return void
	 */
	public function run()
	{
		//Go these from https://api.github.com/users/luigi1015/repos
		//Could also use https://api.github.com/orgs/codehobbynet/repos

		$project = new \CodeHobby\Project();
		$project->githubid = "18024233";
		$project->name = "BlackJackStrategy";
		$project->fullname = "luigi1015/BlackJackStrategy";
		$project->htmlurl = "https://github.com/luigi1015/BlackJackStrategy";
		$project->description = "A simple C++ program to do some calculations on Blackjack strategies.";

		$project = new \CodeHobby\Project();
		$project->githubid = "14932260";
		$project->name = "CodeHobby";
		$project->fullname = "luigi1015/CodeHobby";
		$project->htmlurl = "https://github.com/luigi1015/CodeHobby";
		$project->description = "The HTML, PHP, CSS, etc for my site, CodeHobby.net";
	}
}
