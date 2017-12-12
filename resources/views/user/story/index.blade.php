@extends('layouts.app')

@section('title', 'delivery')


@section('content')
<br>

	<div class="container">

		<div class="row">
			<div class="col-sm-8">

				<div class="well ">
					
					<div class="text-center">
						
							<h1>Historias para completar</h1> <hr>
					
					</div>

					@foreach($stories as $story)
					<div class="panel panel-default">
					  	<div class="panel-heading">
					  		<strong>
					  		<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$story->id}}" aria-expanded="true" aria-controls="collapse{{$story->id}}">
					  			{{$story->title}}
					  		</a>
					  		<a href="#" class="btn btn-xs btn-default pull-right">Leer Historia</a>
					  		</strong>
					  	</div>
					  	<div class="panel-body">
					  		<div class="collapse" id="collapse{{$story->id}}">
 								<div class="well">
 									<p>{{$story->intro}}</p>
 								</div>
 							</div>
					
							<span class="label label-info">Segmentos: {{count($story->segments)}}</span>
							<span class="label label-info">Votos: {{$story->votes}}</span>

							<div class="pull-right">	
					  		<strong><bold>categorías: 
					    	@foreach ($story->tags as $tag)

								@if ($loop->first)
									{{ $tag->name }}
								@else
									- {{ $tag->name }}
								@endif
					    	@endforeach
							</bold></strong>
							</div>
					  	</div>
					</div>
					@endforeach
				</div>

			{{ $stories->render() }}

			</div>
			

		</div><!-- row -->
	</div>

@endsection



