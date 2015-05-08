@extends('app')

@section('content')
<div class="container">

	@include('user.partials.messages')

	{!! Form::open(['url' => 'users/new', 'method' => 'POST']) !!}

		<div class="row">
				@include('user.partials.userfields')

				@include('user.partials.profilefields')

				<div class="form-group">
					{!! Form::submit('Guardar usuario', ['class' => 'btn btn-success', 'style' => 'width: 100%;']) !!}
			  	</div>
				<div class="form-group">
					<a href="{{ url('users/') }}" class="btn btn-info" style="width: 100%;">Cancelar</a>
				</div>
		</div>
		
	{!! Form::close() !!}
</div>
@endsection