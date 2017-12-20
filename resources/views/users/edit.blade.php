@extends('vendor.adminlte.layouts.app')


@section('main-content')
	
		
		{!! Form::open(['route'=>['users.update', $user->id],'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', $user->name, ['class' => 'form-control','placeholder' => 'Nombre completo']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'Correo electronico') !!}
			{!! Form::email('email', $user->email, ['class' => 'form-control','placeholder' => 'Ejemplo@gmail.com']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control','placeholder' => '********']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('type', 'Tipo de usuario') !!}
			{!! Form::select('type', ['member' => 'Miembro', 'admin'=> 'Administrador'], $user->type, ['class' => 'form-control'] ) !!}
		</div>
		
		<div class="form-group">
			{!! form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

@endsection