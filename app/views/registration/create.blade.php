@extends('layouts.default')

@section('content')

<div class="container">
	<h1>Register</h1>

	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
		{{Form::open(['route'=>'register_path'])}}
		<div class="form-group">
			{{Form::label('username', 'Username:')}}
			{{Form::text('username', null, ['class' => 'form-control'] )}}
		</div>

		<div class="form-group">
			{{Form::label('email', 'Email:')}}
			{{Form::text('email', null, ['class' => 'form-control'])}}
		</div>

		<div class="form-group">
			{{Form::label('password', 'Password:')}}
			{{Form::text('password', null, ['class' => 'form-control'])}}
		</div>

		<div class="form-group">
			{{Form::label('password_confirmation', 'Email:')}}
			{{Form::text('password_confirmation', null, ['class' => 'form-control'])}}
		</div>

		<div class="form-group">
			{{Form::submit('Sign Up', ['class'=> 'btn btn-primary'])}}
		</div>
	{{Form::close()}} 
	</div>
</div>

@stop