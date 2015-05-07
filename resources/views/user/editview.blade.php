@extends('app')

@section('content')
<div class="container">
	<form method="POST" action="{{ url('users/edit', $user) }}">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		
		<h4>Basic information:</h4>
	  <div class="form-group">
	    <label for="email">Email address</label>
	    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{$user->email}}">
	  </div>

	  <div class="form-group">
	    <label for="first_name">First name</label>
	    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" value="{{$user->first_name}}">
	  </div>

	  <div class="form-group">
	    <label for="last_name">Last name</label>
	    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" value="{{$user->last_name}}">
	  </div>

	  <br><br><hr> <br><br>
	  <h4>User Profile:</h4>

	  <div class="form-group">
	  	<label for="bio">Bio</label>
	  	<textarea name="bio" id="bio" class="form-control">{{ $user->profile->bio }}</textarea>
	  </div>

	  <div class="form-group">
	  	<label for="twitter">Twitter</label>
	  	<input type="text" id="twitter" name="twitter" value="{{ $user->profile->twitter }}" class="form-control">
	  </div>

	  <div class="form-group">
	  	<label for="website">Website</label>
	  	<input type="text" id="website" name="website" value="{{ $user->profile->website }}" class="form-control">
	  </div>

	  <div class="form-group">
	  	<label for="birthdate">Birth date</label>
	  	<input type="text" id="birthdate" name="birthdate" value="{{ $user->profile->birthdate }}" class="form-control">
	  </div>

	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
@endsection