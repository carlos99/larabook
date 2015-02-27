<?php 

$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('Sign Up for a Larabook account');

$I->amOnPage('/');
$I->click('Sign Up');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username:', 'JohnDoe');
$I->fillField('Email:', 'john@example.com');
$I->fillField('Password:', '1234');
$I->fillField('Password Confirmation:', '1234');
$I->click('Sign Up');

$I->seeCurrentUrlEquals('');
$I->seeRecord('users', [
	'username' => 'JohnDoe',
	'email' => 'john@example.com'
	]);

$I->assertTrue(Auth::check());