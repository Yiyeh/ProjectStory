@extends('layouts.app')


@section('content')


	<div class="container">

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">

				<h1 class="page-header"> User List </h1>

				<a href="{{ route('users.create') }}" class="btn btn-default pull-right">New User</a>
			
				<table class="table table-striped">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Points</th>
						<th>Type</th>
						<th>Options</th>
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
								<a href="{{ route('users.show', $user->id) }}" class="link">View</a>
								<a href="{{ route('users.edit', $user->id) }}" class="link">Edit</a>
								<a href="#" class="link">Delete</a>
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
