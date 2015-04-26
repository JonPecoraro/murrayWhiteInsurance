<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>{{ $title }} - Murray White Insurance</title>
	<meta charset="UTF-8" />
	<meta name="description" content="Murray White Insurance homepage" />
	<meta name="keywords" content="Insurance, Insurnace Agency, Health Insurance, Homeowners Insurance, Life Insurance, Auto Insurance, Personal Insurance, Business Insurance, Insurance Quote, Free Insurance Quote, Insurance Agent, Local Insurance Agent, Insurance Application, Murray, Murray White, Murray White Insurance" />
	<meta name="author" content="Murray White Insurance">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{ HTML::style("/packages/bootstrap/css/bootstrap.min.css") }}
	{{ HTML::style("/packages/bootstrap/css/bootstrap-theme.min.css") }}
	{{ HTML::style("/packages/genericons/genericons.css") }}
	{{ HTML::style("/css/main.css") }}
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		{{ HTML::style("https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js") }}
		{{ HTML::style("https://oss.maxcdn.com/respond/1.4.2/respond.min.js") }}
	<![endif]-->
	@yield('headContent')
</head>
<body role="document">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-9">
					<a href="/">{{ HTML::image("/img/bannerHeading.png", "Murray White Insurance Agency", ["class" => "img-responsive"]) }}</a>
				</div>
				<div class="contact" class="col-xs-3">
					<span class="phone">(336) 889-4747</span>
					<span>
						<a href="https://www.facebook.com/MurrayWhiteInsuranceAgency" target="_blank">
							<span class="genericon genericon-facebook-alt"></span>
						</a>
						<a href="mailto:murraywhite@murraymwhiteinc.com">
							<span class="genericon genericon-mail"></span>
						</a>
					</span>
				</div>
			</div>
		</div>
	</header>
	<nav id="nav" class="navbar navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li @if (Request::is("/")) class="active"@endif>
						{{ HTML::link("/", "Home") }}
					</li>
					<li @if (Request::is("insurance")) class="active"@endif>
						{{ HTML::link("insurance", "Insurance") }}
					</li>
					<li @if (Request::is("quotes")) class="active"@endif>
						{{ HTML::link("quotes", "Quotes") }}
					</li>
					<li @if (Request::is("companies")) class="active"@endif>
						{{ HTML::link("companies", "Represented Companies") }}
					</li>
					<li @if (Request::is("about")) class="active"@endif>
						{{ HTML::link("about", "About Us") }}
					</li>
					<li @if (Request::is("team")) class="active"@endif>
						{{ HTML::link("team", "Our Team") }}
					</li>
					<li @if (Request::is("contact")) class="active"@endif>
						{{ HTML::link("contact", "Contact") }}
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<main id="main">
		<div class="container">
			@if (Session::has("message"))
				<p id="message">{{ Session::get("message") }}</p>
			@endif

			@if ($__env->yieldContent('pageTitle'))
				<div class="row">
					<div class="col-xs-12">
						<h2 class="pageTitle">@yield("pageTitle")</h2>
					</div>
				</div>
			@endif

			@yield("content")
		</div>
		@include("disclaimer")
	</main>
	<footer>
		<div class="container information">
			<div class="row">
				<div class="col-xs-4">
					<h3>Testimonials</h3>
					<div class="testimonial">
						<p>
							I love Murray White Insurance Agency. They have been serving me well for many years. The agents are always quick
							to respond and willing to work with my limited budget. They have helped my family and I get back on our feet
							during trying times.
							<div class="testimonialSignature">- Jonathan Pecoraro</div>
						</p>
					</div>
				</div>
				<div class="col-xs-4">
					<h3>Our Mission</h3>
					<p>
						Our mission is to Independently represent many insurance companies in order to provide our customers with the highest
						quality products at the most affordable price.
					</p>
					<p>
						We never forget that the customer is our reason for being here and that we must exceed their expectations in service
						standards. We will treat each customer as we would expect to be treated ourselves.
					</p>
				</div>
				<div class="col-xs-4">
					<span class="social">
						<a href="https://www.facebook.com/MurrayWhiteInsuranceAgency" target="_blank">
							<span class="genericon genericon-facebook-alt"></span>
						</a>
						<a href="mailto:murraywhite@murraymwhiteinc.com">
							<span class="genericon genericon-mail"></span>
						</a>
					</span>
					<span class="phone">(336) 889-4747</span>
					<span class="address">
						1911 N Main St<br />
						High Point, NC
					</span>
				</div>
			</div>
		</div>
		<div class="copywright">
			&copy; Murray White Insurance {{ date("Y") }} |
			{{ HTML::link("#disclaimerModal", "Disclaimer", ["data-toggle" => "modal"]) }}
		</div>
	</footer>
	{{ HTML::script("/packages/jquery/jquery-1.11.1.min.js") }}
	{{ HTML::script("/packages/bootstrap/js/bootstrap.min.js") }}
	@yield('scriptFiles')
</body>
</html>
