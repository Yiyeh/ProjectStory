@extends('layouts.app')


@section('content')

	{!! Form::open(['route' => 'admin.user.store']) !!}

	{!! Form::close()!!}
@endsection