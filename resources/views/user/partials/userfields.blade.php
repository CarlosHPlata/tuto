<div class="col-md-6">
	<div class="panel panel-default" style="min-height: 575px;">
		<div class="panel-heading">Basic Information</div>

		<div class="panel-body">

			<div class="form-group">
				{!! Form::label('email', 'E-Mail Address') !!}
				{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('first_name', 'First name') !!}
				{!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'first name']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('last_name', 'First name') !!}
				{!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'last name']) !!}
			</div>
			
			
			@if(!isset($user))
				<div class="form-group">
				    {!! Form::label('password', 'Password') !!}
				    
				    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']); !!} <br>
				    {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'repeat password']); !!}
			    </div>
			@endif
			

			<div class="form-group">
				{!! Form::label('type', 'User premissions') !!}
				{!! Form::select('type', ['' => 'Select one', 'user' => 'User', 'admin' => 'Admin'], null, ['class' => 'form-control']) !!}
			</div>

		</div>
	</div>
</div>