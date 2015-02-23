<?php

class RegistrationController extends \BaseController {

	

	/**
	 * Show the form for register a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}

	public function store()
	{
		// return 'Creating a New User';
		return Redirect::home();
	}
}
