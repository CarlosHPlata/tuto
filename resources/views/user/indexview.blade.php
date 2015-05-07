@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<h1 class="">Users</h1>

		<div class="row">
			<div class="col-md-4 pull-right">
				<a href="{{ url('users/new') }}" class="btn btn-info pull-right">nuevo usuario</a>
			</div>
		</div>

	    <table class="table table-striped">
		  <thead>
		  	<th>Full name</th>
		  	<th>E-Mail</th>
		  	<th>Actions</th>
		  </thead>

		  <tbody>
		  	@foreach ($users as $user)
		  	    <tr>
		  	    	<td>{{$user->full_name}}</td>
		  	    	<td>{{$user->email}}</td>
		  	    	<td>
		  	    		<a href="{{ url('users/edit', $user) }}" class="btn btn-default">Editar</a>
		  	    	</td>
		  	    </tr>
		  	@endforeach
		  </tbody>

		</table>
	</div>
</div>
@endsection