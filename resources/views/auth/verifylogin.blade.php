@extends('master.main-auth')

@section('title', 'Two-factor verification')

@section('no-content')

@include('includes.flash.error')
<div class="master">
	<h1>Two-factor verification (2FA)</h1>
	<form action="{{ route('post.verifylogin') }}" method="post">
		@csrf
		<div class="footnote mb-20">
			Please decrypt the message below with your PGP key to access your account!
		</div>
		<div class="label">
			<label for="encrypted_message">encrypted message</label>
		</div>
		<textarea rows="12" cols="42" disabled>{{ session()->get('encrypted_message') }}</textarea>
		<label for="verification_code">verification code</label>
		<input type="text" id="verification_code" name="verification_code" style="width: 138px">
		<div class="inblock">
			<button type="submit">submit</button>
		</div>
		<div class="inblock">
			<a href="{{ route('logout') }}"><button type="button">logout</button></a>
		</div>
	</form>
</div>

@stop