<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en-US">
<head>
	<title>
		@isset($title) 
			{{ $title }}
		@endisset
	</title>
	<meta content="description" content="@isset($description) {{ $description}} @endisset" charset="utf-8">
	@include('partials.head')
	
</head>
<body>
	<div class="container">

		@include('partials.nav')
		
		@yield('content')

	</div>
	<div class="footer">
		@include('partials.footer')
	</div>

	@include('partials.scripts')
</body>
</html>