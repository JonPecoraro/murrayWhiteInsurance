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
					<a href="/">{{ HTML::image("/img/bannerHeading.png", "Murray White Insurance Agency") }}</a>
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
		<section class="information">
			<div class="row">
				<div class="col-xs-4">
					<h3>About Us</h3>
					<p>
						A fully licensed and professional insurance agency, Murray White Insurance Agency, Inc. is an Independent Professional company that works for you to make sure you get the right coverage at the right price. Look to Murray White Insurance for coverage that’s tailored to your needs – including homeowners, commercial/business, flood, renters, and auto – based on competitive quotes from a carefully selected group of local, national and international insurers who meet our strict standards.
					</p>
				</div>
				<div class="col-xs-4">
					{{ HTML::link("whoAreWe", "Who are we") }}
					{{ HTML::link("story", "Our story") }}
					{{ HTML::link("mission", "Mission") }}
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
					<span class="address">1911 N Main St, High Point, NC</span>
				</div>
			</div>
		</section>
		<section class="copywright">
			&copy; Murray White Insurance {{ date("Y") }} |
			{{ HTML::link("#disclaimerModal", "Disclaimer", ["data-toggle" => "modal"]) }}
		</section>
	</footer>
	{{ HTML::script("/packages/jquery/jquery-1.11.1.min.js") }}
	{{ HTML::script("/packages/bootstrap/js/bootstrap.min.js") }}
	@yield('scriptFiles')
</body>
</html>
