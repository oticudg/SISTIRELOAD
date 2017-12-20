@extends('vendor.adminlte.layouts.app')


@section('main-content')

<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
				<!-- Default box -->
				<div class="box box-success">
					<div class="box-body">
						<div class="box-header with-border text-center">
							<h3 class="box-title">Creacion de usuario</h3>
						</div>
					
						{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
		
							<div class="form-group">
								{!! Form::label('name', 'Nombre') !!}
								{!! Form::text('name', null, ['class' => 'form-control','required', 'placeholder' => 'Nombre completo']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('email', 'Correo electronico') !!}
								{!! Form::email('email', null, ['class' => 'form-control','required', 'placeholder' => 'Ejemplo@gmail.com']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('password', 'Contraseña') !!}
								{!! Form::password('password', ['class' => 'form-control','required', 'placeholder' => '********']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('type', 'Tipo de usuario') !!}
								{!! Form::select('type', ['' => 'Seleccione un nivel','member' => 'Miembro', 'admin'=> 'Administrador'], null, ['class' => 'form-control','required'] ) !!}
							</div>
							
							<div class="form-group">
								{!! form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
							</div>

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection