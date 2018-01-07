<!DOCTYPE HTML>
<!--
	Radius by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		@include('layouts.title') 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{ URL::to('src/radius/css/main.css') }}" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="preview">
				<div class="inner">
					<div class="content">
						<h1>Radius</h1>
						<h2>A fully responsive masonry style portfolio template.</h2>
					</div>
					<a href="/" class="button hidden"><span>Let's Go</span></a>
				</div>
			</header>

		<!-- Main -->
			<div id="preview">
				<div class="inner">
					<div class="image fit">
						<img src="{{ URL::to('src/radius/images/about.jpg') }}" alt="" />
					</div>
					<div class="content">
						<header>
							<h2>Canopy MaLaysia</h2>
						</header>
						<p>We are one of the best canopy in Malaysia. Donec est ligula, ultrices id posuere vitae, rutrum in tellus. Suspendisse vitae aliquam metus. Cras blandit, tortor ut eleifend porttitor, urna lacus porttitor arcu, quis vestibulum metus dolor ut neque. Aenean et nisi venenatis, mollis enim eget, pharetra nunc. Sed blandit non mi nec ultrices. Vestibulum hendrerit tortor id gravida eleifend. Morbi vitae molestie odio. Etiam nec est vel sapien posuere vulputate eget eget mi. Quisque vulputate ligula velit, id accumsan dui fringilla nec. Morbi nisi mauris, placerat sit amet feugiat nec, vehicula ut ex.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec est ligula, ultrices id posuere vitae, rutrum in tellus. Suspendisse vitae aliquam metus. Cras blandit, tortor ut eleifend porttitor, urna lacus porttitor arcu, quis vestibulum metus dolor ut neque. Aenean et nisi venenatis, mollis enim eget, pharetra nunc. Sed blandit non mi nec ultrices. Vestibulum hendrerit tortor id gravida eleifend. Morbi vitae molestie odio. Etiam nec est vel sapien posuere vulputate eget eget mi. Quisque vulputate ligula velit, id accumsan dui fringilla nec. Morbi nisi mauris, placerat sit amet feugiat nec, vehicula ut ex.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
				<a href="#" class="nav previous"><span class="fa fa-chevron-left"></span></a>
				<a href="#" class="nav next"><span class="fa fa-chevron-right"></span></a>
			</div>

		<!-- Footer -->
			@include('partials.footer') 

		<!-- Scripts -->
			<script src="{{ URL::to('src/radius/js/jquery.min.js') }}"></script>
			<script src="{{ URL::to('src/radius/js/skel.min.js') }}"></script>
			<script src="{{ URL::to('src/radius/js/util.js') }}"></script>
			<script src="{{ URL::to('src/radius/js/main.js') }}"></script>

	</body>
</html>