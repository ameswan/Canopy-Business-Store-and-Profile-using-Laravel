<!doctype html>
<html lang="en">
<head>
    {{-- ADD DESIGN --}}
    
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="{{ URL::to('src/radius/css/main.css') }}" />
    {{-- DONE DESIGN --}}

    {{--<meta charset="UTF-8">--}}
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::to('src/css/app.css') }}">

    @yield('styles')
</head>
<body>
    {{-- ADD DESIGN --}}
    
            {{-- DONE DESIGN --}}
@include('partials.header') 
<div class="container">
 
    @yield('content')
    
    
</div>
    {{-- ADD DESIGN --}}
<!-- Footer -->
			@include('partials.footer') 

		<!-- Scripts -->
			<script src="{{ URL::to('src/radius/js/jquery.min.js') }}"></script>
			<script src="{{ URL::to('src/radius/js/skel.min.js') }}"></script>
			<script src="{{ URL::to('src/radius/js/util.js') }}"></script>
			<script src="{{ URL::to('src/radius/js/main.js') }}"></script>
    {{-- DONE DESIGN --}}



<script   src="https://code.jquery.com/jquery-1.12.3.min.js"   integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@yield('scripts')
</body>
</html>