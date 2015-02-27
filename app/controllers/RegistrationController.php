<?php

use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;
use Larabook\Core\CommandBus;

class RegistrationController extends \BaseController {

	use CommandBus;

	private $registrationForm;

	function __construct(RegistrationForm $registrationForm){
		$this->registrationForm = $registrationForm;
	}

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
		$this->registrationForm->validate(Input::all());

		extract(Input::only('username', 'email', 'password'));

		$user = $this->execute(
			$command = new RegisterUserCommand($username, $email, $password)
		);

		// return 'Creating a New User';
		/*$this->registrationForm->validate(Input::all());
		$user = User::create(
			Input::only('username', 'email', 'password'));

		Auth::login($user);*/
		Auth::login($user);

		return Redirect::home();
	}
}
