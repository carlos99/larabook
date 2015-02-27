<?php namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator{

	// Validation Rules Form Registration Form

	protected $rules = [
		'username' => 'required|unique:users',
		'email' => 'required|email|unique:users',
		'password' =>	'required|confirmed'
	];
}