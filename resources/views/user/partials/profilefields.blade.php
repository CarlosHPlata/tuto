<div class="col-md-6">
	<div class="panel panel-default" style="min-height: 575px;">
		<div class="panel-heading">User Profile</div>

		<div class="panel-body">
			{!! Form::label('bio', 'Bio') !!}
			{!! Form::textarea('bio', isset($user)? $user->profile->bio:null,  ['rows'=>'3', 'class' => 'form-control', 'placeholder' => 'Bio']) !!}
		</div>

		<div class="panel-body">
			{!! Form::label('twitter', 'Twitter') !!}
			{!! Form::text('twitter', isset($user)? $user->profile->twitter:null,  ['class' => 'form-control', 'placeholder' => 'Twitter user']) !!}
		</div>

		<div class="panel-body">
			{!! Form::label('website', 'Website') !!}
			{!! Form::text('website', isset($user)? $user->profile->website:null,  ['class' => 'form-control', 'placeholder' => 'Website']) !!}
		</div>

		<div class="panel-body">
			{!! Form::label('birthdate', 'Birthdate') !!}
			{!! Form::text('birthdate', isset($user)? $user->profile->birthdate:'1993-07-30',  ['class' => 'form-control', 'placeholder' => 'Birthdate']) !!}
		</div>
		
	</div>
</div>