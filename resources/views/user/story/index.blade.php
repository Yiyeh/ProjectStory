@extends('layouts.app')

@section('title', 'delivery')


@section('content')
<br>

	<div class="container">

		<div class="row">
			<div class="col-sm-6">

				<div class="well">
					
					<div class="page-header text-center"><h1>Historias</h1></div>

					@foreach($stories as $story)
					<div class="panel panel-default">
					  	<div class="panel-heading">{{$story->title}}</div>
					  	<div class="panel-body">
					    	{{$story->id}}
					  	</div>
					</div>
					@endforeach
				</div>

			{{ $stories->render() }}

			</div>
			

		</div><!-- row -->
	</div>

@endsection



