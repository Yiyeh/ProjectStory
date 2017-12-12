@extends('layouts.app')


@section('content')


	<div class="container">

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">

				<h1 class="page-header"> User List </h1>

				@include('flash::message')

				<a href="{{ route('users.create') }}" class="btn btn-default pull-right">New User</a>
			
				<table class="table table-striped">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Points</th>
						<th>Type</th>
						<th colspan="3">Options</th>
					</thead>
					<tbody>
						@foreach ($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->points }}</td>
							<td>{{ $user->type }}</td>
							<td>
								<a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-primary">View</a>
							</td>
							<td>	
								<a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
							</td>
							<td>	
								<form action="{{ route('users.destroy', $user->id) }}" method="POST">
									{{csrf_field()}}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-sm btn-danger">Delete</button>
								</form>
							<td>			
						</tr>
						@endforeach					
					</tbody>
				</table>

				{{ $users->render() }}			
	
			</div>
		</div><!-- row -->
	</div>

@endsection
