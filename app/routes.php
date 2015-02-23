<?php

// Statics pages can be inside PagesController
Route::get('/', 'PagesController@home');

// Registration
Route::get('register', ['as' => 'register_path', 'uses'=>'RegistrationController@create']);