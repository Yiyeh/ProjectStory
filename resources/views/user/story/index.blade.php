@extends('user.layout')

@section('title', 'delivery')


@section('content')
<br>

	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<ul>
					@extends('user.partials.nav')
				</ul>
			</div>

			

			<!-- div lateral Categorias -->
			<div class="col-sm-8">

				

				<ul class="list-group">
					<li class="list-group-item"><h5><strong>Historias Para Completar</strong></h5></li>
					@foreach ($stories as $story)

						<li class="list-group-item">

							<p>{{$story->title}}
							<a href="#" class="pull-right">Leer</a></p>
							<p class="pull-right"> votos: {{ $story->votes}}</p><br>
						</li>

					@endforeach 

					<li class="list-group-item">
						{{ $stories->render() }}
					</li>
				</ul>
					
					
			</div>	

			
			<div class="col-sm-4">

				<div class="panel panel-default">
					<div class="panel-heading">Actualmente:</div>
					<div class="panel-body"><p>Usuarios Registrados: {!! $totalUsers !!}</p></div>
					<div class="panel-body"><p>Historias Registradas: {!! $totalStories !!}</p></div>
				</div>
				
				
	
			</div>


		</div><!-- row -->
	</div>

@endsection



