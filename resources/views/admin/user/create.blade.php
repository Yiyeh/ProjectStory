@extends('layouts.app')


@section('content')
	
	<div class="container">

		<h1 class="page-header">New User</h1>
		<a href="{{ route('users.index') }}" class="btn btn-default pull-right">List</a>	
	
		{!! Form::open(['route' => 'users.store']) !!}
			
			<div class="form-group">
				{!! Form::label('name','Nombre') !!}
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('email','Correo Electronico') !!}
				{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@email.com']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('password','Contraseña') !!}
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '********']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('points','Puntos') !!}
				{!! Form::number('points', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('type','Tipo') !!}
				{!! Form::select('type', ['MEMBER' => 'Miembro','EDITOR' =>'Editor','MODERATOR' => 'Moderador' , 'ADMIN' => 'Administrador'],null, ['class' => 'form-control', 'placeholder' => 'Seleccione un tipo']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Enviar', ['class' => 'form-control']) !!}
			</div>

		{!! Form::close()!!}
	</div>
@endsection