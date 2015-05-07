@extends('app')

@section('content')
<div class="container">
	<form method="POST" action="{{ url('users/new') }}">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		
		<h4>Basic information:</h4>
	  <div class="form-group">
	    <label for="email">Email address</label>
	    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" >
	  </div>

	  <div class="form-group">
	    <label for="first_name">First name</label>
	    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" >
	  </div>

	  <div class="form-group">
	    <label for="last_name">Last name</label>
	    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" >
	  </div>

	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
	  </div>

	  <br><br><hr> <br><br>
	  <h4>User Profile:</h4>

	  <div class="form-group">
	  	<label for="bio">Bio</label>
	  	<textarea name="bio" id="bio" class="form-control"></textarea>
	  </div>

	  <div class="form-group">
	  	<label for="twitter">Twitter</label>
	  	<input type="text" id="twitter" name="twitter" class="form-control">
	  </div>

	  <div class="form-group">
	  	<label for="website">Website</label>
	  	<input type="text" id="website" name="website" class="form-control">
	  </div>

	  <div class="form-group">
	  	<label for="birthdate">Birth date</label>
	  	<input type="text" id="birthdate" name="birthdate" class="form-control" value="1993-07-30">
	  </div>

	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
@endsection