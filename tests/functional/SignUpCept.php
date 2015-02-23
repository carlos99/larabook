<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('Sign Up for a Larabook account');

$I->amOnPage('/');
$I->click('Sign Up');
$I->seeCurrentUrlEquals('/register');

$I->fillField(('Username', 'Carlos'));
$I->fillField(('Email', 'carlos.demo@gmail.com'));
$I->fillField(('Password', 'demo'));
$I->fillField(('Password Confirmation', 'demo'));
$I->click('Sign Up');

$I->seeCurrentUrlEquals('');
$I->see('Welcome to Larabook';)