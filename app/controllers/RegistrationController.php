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
}
