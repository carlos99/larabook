@extends('layouts.default')

@section('content')

<div class="container">
	<div class="jumbotron">
		<h1>Welcome to Laravel Social Network</h1>
		<p class="lead">Welcome to the premier place to talk about Laravel.</p>
		<p>
			{{link_to_route('register_path', 'Sign Up', null, ['class' => 'btn btn-lg btn-primary'])}}
		</p>
	</div>
</div>

@stop