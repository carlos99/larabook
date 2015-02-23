<?php

// Statics pages can be inside PagesController
Route::get('/', ['as'=> 'home', 'uses' =>'PagesController@home']);

// Registration
Route::get('register', ['as' => 'register_path', 'uses'=>'RegistrationController@create']);

Route::post('register', ['as' => 'register_path', 'uses'=>'RegistrationController@store']);