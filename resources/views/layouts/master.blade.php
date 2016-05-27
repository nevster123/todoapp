<!DOCTYPE html>
<html>
	<head>
		<title>My TodoApp</title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
	</head>
	<body>
		 @include('navigation')
		<div class="container">
			@yield('content')
			<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
		</div>
	</body>	
</html>