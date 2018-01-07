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
			<header id="header">
				<div class="inner">
					<div class="content">
						<h1>Beli <b>~LAH</b></h1>
						<h2 style="text-align:justify">SUAMI YANG BAIK menerima pendapat istrinya. ISTRI YANG BAIK menerima pendapatan suaminya</h2>
						<br><a href="#" class="button big alt"><span>Teruskan</span></a>
					</div>
					<a href="#" class="button hidden"><span>Teruskan</span></a><br><br>
				</div>
			</header>

		<!-- Main -->
			<div id="main">
				<div class="inner">
					<div class="columns">

						
    <!-- Column 1 (horizontal, vertical, horizontal, vertical) -->
							<div class="image fit">
								<a href="/about"><img src="{{ URL::to('src/radius/images/pic05.jpg') }}" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="/portfolio"><img src="{{ URL::to('src/radius/images/pic06.jpg') }}" alt="" /></a>
							</div>
							<div class="image fit"></div><div class="image fit"></div>

						<!-- Column 2 (vertical, horizontal, vertical, horizontal) -->
							<div class="image fit">
								<a href="/news"><img src="{{ URL::to('src/radius/images/pic13.jpg') }}" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="/vacancy"><img src="{{ URL::to('src/radius/images/pic01.jpg') }}" alt="" /></a>
							</div>
							<div class="image fit"></div><div class="image fit"></div>

						<!-- Column 3 (horizontal, vertical, horizontal, vertical) -->
							<div class="image fit">
								<a href="organization"><img src="{{ URL::to('src/radius/images/pic14.jpg') }}" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="/products"><img src="{{ URL::to('src/radius/images/pic10.jpg') }}" alt="" /></a>
							</div>
							<div class="image fit"></div><div class="image fit"></div>

						<!-- Column 4 (vertical, horizontal, vertical, horizontal) -->
							
							<div class="image fit">
								<a href="/shop"><img  src="{{ URL::to('src/radius/images/pic02.jpg') }}" alt="" /></a>
							</div>
							<div class="image fit">
								<a href="/services"><img src="{{ URL::to('src/radius/images/pic09.jpg') }}" alt="" /></a>
							</div>
							<div class="image fit"></div><div class="image fit"></div>
					</div>
				</div>
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