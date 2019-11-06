<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets('css/aap.css')">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	@include('inc.navbar');
	<div class="container">
		@if(Request::is('/'))
		@include('inc.showcase')
		@endif
	<div class="row">
		<div class="col-md-8 col-lg-8">
	@yield('content')
	

</div>
	
		
			<div class="col-md-4 col-lg-4">
				@include('inc.sidebar')
			</div></div>
	<div class="footer">
		<p>Copy@right</p>
	
</div>
</body>
</html>