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
		return view('projects');
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
		\Log::info( 'postContact(): name: ' . $name );
		\Log::info( 'postContact(): email: ' . $email );
		\Log::info( 'postContact(): message: ' . $message );
		return view('contact');
	}
}
