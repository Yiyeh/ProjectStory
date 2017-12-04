@extends('layouts.app')

@section('title', 'delivery')


@section('content')
<br>

	<div class="container">

		<div class="row">
			<div class="col-sm-4">
			
			<div class="table table-striped">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Points</th>
					<th>Type</th>
					<th>Options</th>
				</thead>
				<tbody>
					<tr>
						@foreach ($users as $user)
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->points }}</td>
							<td>{{ $user->type }}</td>
							<td>

							<td>
						@endforeach
					</tr>					
				</tbody>
			</div>			
	
			</div>


		</div><!-- row -->
	</div>

@endsection



