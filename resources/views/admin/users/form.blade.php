<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'name', 'Username') !!}
		
				{!! Form::myInput('email', 'email', 'Email') !!}
		
				{!! Form::myInput('password', 'password', 'Password') !!}
		
				{!! Form::myInput('password', 'password_confirmation', 'Password again') !!}
	
				@if(auth()->user()->role == 0)
					{!! Form::mySelect('role', 'Role', config('variables.role'), null, ['class' => 'form-control select2']) !!}
				@endif
				
				{!! Form::myFile('avatar', 'Avatar') !!}
		
				{!! Form::myTextArea('bio', 'Bio') !!}
		</div>  
	</div>
</div>