<?php

namespace CodeHobby\Http\Controllers;

use Illuminate\Http\Request;

use CodeHobby\Http\Requests;

use Illuminate\Support\Facades\Input;

class CodeHobbyAppController extends Controller
{
	/**
	 * Responds to GET /
	 */
	public function getHomepage()
	{
		return view('home');
	}

	/**
	 * Responds to GET /projects
	 */
	public function getProjects()
	{
		return view('projects')->with('projects', \CodeHobby\Project::all());
	}

	/**
	 * Responds to GET /contact
	 */
	public function getContact()
	{
		return view('contact');
	}

	/**
	 * Responds to POST /contact
	 */
	public function postContact( Request $request )
	{
		//Validate the form data
		$this->validate($request, [
			'name' => 'required|min:3',
			'email' => 'email',
			'message' => 'required|min:3',
		]);

		$name = Input::get('name');
		$email = Input::get('email');
		$message = Input::get('message');
		$ipaddress = Input::get('ipaddress');
		//\Log::info( 'postContact(): name: ' . $name );
		//\Log::info( 'postContact(): email: ' . $email );
		//\Log::info( 'postContact(): message: ' . $message );

		//Save the comment
		$comment = new \CodeHobby\Comment();
		$comment->name = $name;
		$comment->email = $email;
		$comment->comment = $message;
		$comment->ipaddress = $ipaddress;
		$comment->save();

		return view('contact');
	}

	/**
	 * Responds to GET /admin
	 */
	public function getAdmin()
	{
		//$client = new \Github\Client();
		//$repositories = $client->api('luigi1015')->repositories();
		//return view('admin')->with('comments', \CodeHobby\Comment::all())->with('repositories', $repositories);
		//$repositories = CodeHobbyAppController::rest_helper('http://github.com/api/v2/json/repos/show/funkatron');
		//$repositories = CodeHobbyAppController::rest_helper('https://api.github.com/users/luigi1015/repos');
		//$repositories = CodeHobbyAppController::getGithubProjects();
		$repositories = CodeHobbyAppController::updateGithubProjects();
		//return view('admin')->with('comments', \CodeHobby\Comment::all())->with('projects', $repositories);
		return view('admin')->with('comments', \CodeHobby\Comment::all());
	}

	/**
	 * Responds to GET /ip
	 */
	public function getIP()
	{
		return view('ip');
	}

	public static function updateGithubProjects()
	{
		$repositories = CodeHobbyAppController::getGithubProjects();
		//$databaseProjects = \CodeHobby\Project()::all();
		
		//Go through the repositories and save them one by one. I'd like to do a bulk save to reduce the number of calls to the database, but that doesn't seem to be supported.
		foreach( $repositories as $repository )
		{
			$projectArray = array( 'githubid' => $repository['id'], 'name' => $repository['name'], 'fullname' => $repository['full_name'], 'htmlurl' => $repository['html_url'], 'description' => $repository['description']  );
			\CodeHobby\Project::firstOrCreate( $projectArray );
/*
			$project = new \CodeHobby\Project();
			$project->githubid = $repository['id'];
			$project->name = $repository['name'];
			$project->fullname = $repository['full_name'];
			$project->htmlurl = $repository['html_url'];
			$project->description = $repository['description'];
			$project->save();//Save should update the project if it already exists.
*/
		}

		//return $repositories;
	}

	private static function getGithubProjects( $assoc = true )
	{
		$url = 'https://api.github.com/users/luigi1015/repos';
		$parms = array( 'http' => array('method' => 'GET') );

		try
		{
			ini_set('user_agent','PHP');
			$context = stream_context_create($parms);
			$headers = @get_headers($url);
			if( $headers[6] == 'Status: 200 OK' )
			{
				$fp = fopen($url, 'rb', false, $context);
				if (!$fp)
				{
					\Log::error( 'getGithubProjects(): Failed to open URL ' . $url );
					$response = "";
				}
				else
				{
					$response = stream_get_contents($fp);
				}
				
				$jsonResponse = json_decode($response, $assoc);
				return $jsonResponse;
			}
			else
			{
				//$file_headers = @get_headers($filename);
				\Log::error( 'getGithubProjects(): Failed to find URL ' . $url );
				\Log::error( 'Headers: ' );
				\Log::error( $headers );
			}

			return [];
		}
		catch( Exception $e )
		{
			\Log::error( 'getGithubProjects(): Got an error trying to open URL ' . $url );
			\Log::error( $e );
			$response = "";
		}
	}
}
