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
						<h1>Career at CanopyMe :D</h1>
						<h2>Don't be silly, everyone want this JOB.</h2>
					</div>
					<a href="/" class="button hidden"><span>Let's Go</span></a>
				</div>
			</header>

		<!-- Main -->
			<div id="preview" class="vertical">
				<div class="inner">
					<div class="image fit">
						<img src="src/radius/images/vacancy.jpg" alt="" />
					</div>
					<div class="content">
						<header>
							<h2>Career at CanopyMe</h2>
						</header>
						<p>Don't be silly, everyone want this JOB.</p>
						<p>Proin faucibus laoreet quam. Maecenas et ullamcorper lectus. Ut nunc velit, varius auctor semper vitae, fermentum ac ligula. Curabitur at dolor sapien. Sed nec libero at leo feugiat pharetra vitae vel felis. Pellentesque eget erat id mauris volutpat blandit. Suspendisse vulputate massa turpis, eu ultrices massa malesuada at. Sed sit amet faucibus sem. Nulla lectus arcu, tincidunt a dapibus vitae, ultrices et sem. Sed eget sodales odio, in hendrerit dui. Nulla erat nibh, fermentum quis enim ac, ultrices euismod augue. Proin ligula nibh, pretium at enim eget, tempor feugiat nulla. Cras at auctor sapien. Praesent blandit, odio vel sodales egestas, nisl nibh aliquam est, quis aliquam enim nibh vitae tellus.</p>
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