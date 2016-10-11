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

	/**
	 * Responds to GET /japanese
	 */
	public function getJapanese()
	{
		return view('japanese');
	}

	/**
	 * Responds to GET /csscolors
	 */
	public function getCssColors()
	{
		return view('csscolors');
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
		else if( $type == 'password' )
		{
			$password = '';
			$validCharacters = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'm', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '2', '3', '4', '5', '6', '7', '8', '9',  '-', '=', '[', ']', '_', '+', '<', '>', '?', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '|' );
			//array_push( $randomData, random_bytes($amount) );
			for( $i = 0; $i < $amount; $i++ )
			{
				$char = $validCharacters[random_int(0,sizeof($validCharacters))];
				$password .= $char;
			}
			array_push( $randomData, $password );
		}
		else if( $type == 'bytes' )
		{
			//array_push( $randomData, random_bytes($amount) );
		}

		return view('random')->with('randomData', $randomData);
	}

	/**
	 * Responds to GET /time
	 */
	public function getTime()
	{
		$times = array();
		$times['America/New_York'] = new \DateTime("now", new \DateTimeZone('America/New_York') );
		$times['America/Chicago'] = new \DateTime("now", new \DateTimeZone('America/Chicago') );
		$times['America/Denver'] = new \DateTime("now", new \DateTimeZone('America/Denver') );
		$times['America/Los_Angeles'] = new \DateTime("now", new \DateTimeZone('America/Los_Angeles') );
		$times['America/Anchorage'] = new \DateTime("now", new \DateTimeZone('America/Anchorage') );
		$times['Pacific/Honolulu'] = new \DateTime("now", new \DateTimeZone('Pacific/Honolulu') );
		$times['Europe/Amsterdam'] = new \DateTime("now", new \DateTimeZone('Europe/Amsterdam') );
		$times['Europe/Athens'] = new \DateTime("now", new \DateTimeZone('Europe/Athens') );
		$times['Europe/Berlin'] = new \DateTime("now", new \DateTimeZone('Europe/Berlin') );
		$times['Europe/Brussels'] = new \DateTime("now", new \DateTimeZone('Europe/Brussels') );
		$times['Europe/Dublin'] = new \DateTime("now", new \DateTimeZone('Europe/Dublin') );
		$times['Europe/Kiev'] = new \DateTime("now", new \DateTimeZone('Europe/Kiev') );
		$times['Europe/London'] = new \DateTime("now", new \DateTimeZone('Europe/London') );
		$times['Europe/Madrid'] = new \DateTime("now", new \DateTimeZone('Europe/Madrid') );
		$times['Europe/Moscow'] = new \DateTime("now", new \DateTimeZone('Europe/Moscow') );
		$times['Europe/Paris'] = new \DateTime("now", new \DateTimeZone('Europe/Paris') );
		$times['Europe/Rome'] = new \DateTime("now", new \DateTimeZone('Europe/Rome') );
		$times['Europe/Stockholm'] = new \DateTime("now", new \DateTimeZone('Europe/Stockholm') );
		$times['Europe/Vatican'] = new \DateTime("now", new \DateTimeZone('Europe/Vatican') );
		$times['Europe/Zurich'] = new \DateTime("now", new \DateTimeZone('Europe/Zurich') );
		$times['Asia/Bangkok'] = new \DateTime("now", new \DateTimeZone('Asia/Bangkok') );
		$times['Asia/Hong_Kong'] = new \DateTime("now", new \DateTimeZone('Asia/Hong_Kong') );
		$times['Asia/Jerusalem'] = new \DateTime("now", new \DateTimeZone('Asia/Jerusalem') );
		$times['Asia/Tokyo'] = new \DateTime("now", new \DateTimeZone('Asia/Tokyo') );
		$times['Pacific/Auckland'] = new \DateTime("now", new \DateTimeZone('Pacific/Auckland') );
		$times['GMT'] = new \DateTime("now", new \DateTimeZone('GMT') );
		$times['UTC'] = new \DateTime("now", new \DateTimeZone('UTC') );
		$times['Zulu'] = new \DateTime("now", new \DateTimeZone('Zulu') );
		return view('time')->with('times', $times);
	}
}
