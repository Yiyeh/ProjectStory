<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Stories - @yield('title')</title>

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap3.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" crossorigin="anonymous">

</head>
<body>

		
		<div class="jumbotron text-center">
			<br><br>
			
			  <h1>Bienvenidos a Stories</h1>
			  <p>Lee o completa historias, las mejores ideas las seguiran.</p>

			    <a class="btn btn-primary btn-lg" href="#" role="button">Leer Mas</a>

		
		</div>
		@yield('content')



	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap3.js') }}"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>
	
</body>
</html>