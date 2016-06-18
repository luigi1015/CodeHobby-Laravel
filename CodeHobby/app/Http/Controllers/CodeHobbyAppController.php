<?php

namespace CodeHobby\Http\Controllers;

use Illuminate\Http\Request;

use CodeHobby\Http\Requests;

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
	public function postContact()
	{
		return view('contact');
	}
}
