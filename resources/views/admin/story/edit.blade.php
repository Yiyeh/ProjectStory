@extends('layouts.app')


@section('content')
	
	<div class="container">

		<h1 class="page-header">Edit Story</h1>
		<a href="{{ route('users.index') }}" class="btn btn-default pull-right">List</a>	
	
		{!! Form::model($story, ['route' => ['stories.update', $story->id], 'method' => 'PUT']) !!}


			<div class = "form-group">
				{!! Form::label('tag_id', 'Tag') !!}
				{!! Form::select('tag_id', $tags,null, ['class' => 'form-control'] ) !!}
			</div>
				
			<div class="form-group">
				{!! Form::label('title','Titulo') !!}
				{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Escriba un titulo']) !!}
			</div>


			<div class="form-group">
				{!! Form::label('votes','Votos') !!}
				{!! Form::number('votes', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('status','Tipo') !!}
				{!! Form::select('status', ['DRAFT' => 'Borrador','PUBLISHED' =>'Publicado'],null, ['class' => 'form-control', 'placeholder' => 'Seleccione un tipo']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Enviar', ['class' => 'form-control']) !!}
			</div>

		{!! Form::close()!!}
	</div>
@endsection