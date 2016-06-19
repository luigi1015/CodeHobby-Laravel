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
		return view('admin')->with('comments', \CodeHobby\Comment::all());
	}
}
