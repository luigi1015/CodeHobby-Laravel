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
		return view('home')->with('activePage','home');
	}

	/**
	 * Responds to GET /projects
	 */
	public function getProjects()
	{
		return view('projects')->with('projects', \CodeHobby\Project::paginate(10))->with('activePage','projects');
	}

	/**
	 * Responds to GET /contact
	 */
	public function getContact()
	{
		return view('contact')->with('activePage','contact');
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

		return view('contact')->with('activePage','contact');
	}

	/**
	 * Responds to GET /admin
	 */
	public function getAdmin()
	{
		//\Session::flash( 'error','This is a test error.' );
		//\Session::flash( 'message','This is a test message.' );
		return view('admin')->with('comments', \CodeHobby\Comment::paginate(10))->with('activePage','admin');
	}

	/**
	 * Responds to GET /eastereggs
	 */
	public function getEasterEggs()
	{
		return view('eastereggs')->with('activePage','eastereggs');
	}

	/**
	 * Responds to GET /ip
	 */
	public function getIP()
	{
		return view('ip');
	}

	/**
	 * Responds to GET /json/ip
	 */
	public function getJSONIP()
	{
		return response()->json(['ip' => request()->ip() ]);
	}

	/**
	 * Responds to POST /updateprojects
	 */
	public function postUpdateProjects( Request $request )
	{
		$exitCode = \Artisan::call('updateprojects', []);

		return redirect('admin');
	}

	public static function updateGithubProjects()
	{
		$repositories = CodeHobbyAppController::getGithubProjects();
		
		//Go through the repositories and save them one by one. I'd like to do a bulk save to reduce the number of calls to the database, but that doesn't seem to be supported.
		foreach( $repositories as $repository )
		{
			$projectArray = array( 'githubid' => $repository['id'], 'name' => $repository['name'], 'fullname' => $repository['full_name'], 'htmlurl' => $repository['html_url'], 'description' => $repository['description']  );
			\CodeHobby\Project::firstOrCreate( $projectArray );
		}
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

	/**
	 * Responds to GET /loremipsum
	 */
	public function getLoremIpsum()
	{
		return view('loremipsum');
	}

	/**
	 * Responds to POST /loremipsum
	 */
	public function postLoremIpsum( Request $request )
	{
		//Validate the form data
		$this->validate($request, [
			'numberOfParagraphs' => 'required|numeric|min:1|max:20',
		]);

		$numberOfParagraphs = Input::get('numberOfParagraphs');
		$generator = new \Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($numberOfParagraphs);

		//\Session::flash( 'message',$numberOfParagraphs );

		return view('loremipsum')->with('loremipsumtext', $paragraphs);
	}

	/**
	 * Responds to GET /reference
	 */
	public function getReference()
	{
		return view('reference')->with('activePage','reference');
	}

	/**
	 * Responds to GET /browserdata
	 */
	public function getBrowserData()
	{
		return view('browserdata');
	}

	/**
	 * Responds to GET /randomdata
	 */
	public function getRandomData()
	{
		return view('random');
	}

	/**
	 * Responds to POST /randomdata
	 */
	public function postRandomData( Request $request )
	{
		//Validate the form data
		$this->validate($request, [
			'type' => 'required',
			'amount' => 'required|numeric|min:1|max:100',
			'min' => 'required|numeric|min:1|max:100',
			'max' => 'required|numeric|min:1|max:100',
		]);

		$type = Input::get('type');
		$amount = Input::get('amount');
		$min = Input::get('min');
		$max = Input::get('max');
		//\Log::info( 'postRandomData(): type: ' . $type );
		//\Log::info( 'postRandomData(): amount: ' . $amount );

		$randomData = array();
		if( $type == 'int' )
		{
			for( $i = 0; $i < $amount; $i++ )
			{
				array_push( $randomData, random_int($min,$max) );
			}
		}
		else if( $type == 'bytes' )
		{
			//array_push( $randomData, random_bytes($amount) );
		}

		return view('random')->with('randomData', $randomData);
	}
}
