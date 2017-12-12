@extends('layouts.app')


@section('content')


	<div class="container">

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">

				<h1 class="page-header"> Story List </h1>

				@include('flash::message')

				<a href="{{ route('stories.create') }}" class="btn btn-default pull-right">New Story</a>
			
				<table class="table table-striped">
					<thead>
						<th>ID</th>
						<th>User</th>
						<th>Tag</th>
						<th>Title</th>
						<th>Votes</th>
						<th>Type</th>
						<th colspan="3">Options</th>
					</thead>
					<tbody>
						@foreach ($stories as $story)
						<tr>
							<td>{{ $story->id }}</td>
							<td>{{ $story->user->name }}</td>
							<td>{{ $story->tag_id }}</td>
							<td>{{ $story->title }}</td>
							<td>{{ $story->votes }}</td>
							<td>{{ $story->status }}</td>
							<td>
								<a href="{{ route('stories.show', $story->id) }}" class="btn btn-sm btn-primary">View</a>
							</td>
							<td>	
								<a href="{{ route('stories.edit', $story->id) }}" class="btn btn-sm btn-warning">Edit</a>
							</td>
							<td>	
								<form action="{{ route('stories.destroy', $story->id) }}" method="POST">
									{{csrf_field()}}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-sm btn-danger">Delete</button>
								</form>
							<td>			
						</tr>
						@endforeach					
					</tbody>
				</table>

				{{ $stories->render() }}			
	
			</div>
		</div><!-- row -->
	</div>

@endsection
