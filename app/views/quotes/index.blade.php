@extends('layouts.default')

@section('headContent')
	{{ HTML::style("/css/quotes.css") }}
@endsection

@section('content')
	@if (Input::has("type"))
		<?php $type = Input::get("type"); ?>
		@if ($type === "auto")
			@include("quotes.auto")
		@elseif ($type === "specialEvents")
			@include("quotes.specialEvents")
<!--		
		@elseif ($type === "business")
			@include("quotes.business")
		@elseif ($type === "health")
			@include("quotes.health")
		@elseif ($type === "homeowners")
			@include("quotes.homeowners")
		@elseif ($type === "life")
			@include("quotes.life")
		@elseif ($type === "other")
			@include("quotes.other")
-->
		@else
			<p>Wer're sorry, but Murray White Insurance Agency does not offer {{ $type }} insurance.</p>
		@endif
	@else
		@section('pageTitle')
			Quotes
		@endsection
		@if (isset($success))
			<div class="row text-center">
				<div class="col-xs-12">
					<h3 class="text-success">
						<span class="glyphicon glyphicon-ok"></span>
						Thank you, your quote has been received.
					</h3>
					<p>
						An agent from Murray White Insurance Agency will be in touch with you shortly.
					</p>
				</div>
			</div>
		@endif
		<div class="row">
			<div class="col-xs-7">
				{{ HTML::image("/img/meeting.jpg", "meeting photo", ["class" => "img-responsive img-rounded", "align" => "left"]) }}
			</div>
			<div class="col-xs-5">
				<h3>Request a Quote</h3>
				{{ Form::open(["class" => "form"]) }}
					{{ Form::select("type",
						[
							"auto" => "Auto",
							"specialEvents" => "Special Events"
						/*
							"business" => "Business",
							"health" => "Health",
							"homeowners" => "Homeowners",
							"life" => "Life",
							"other" => "Other Insurance"
						*/
						], Form::old("type"), ["class" => "form-control"])
					}}
					{{ Form::text("zipcode", Form::old("zipcode"), ["placeholder" => "Zip Code", "class" => "form-control"]) }}
					{{ Form::submit("Get Quote", ["class" => "btn btn-primary pull-right"]) }}
				{{ Form::close() }}
				<p id="quoteDescription">
					The diligent workers at Murray White Insurance Agency will query their large database of represented
					companies in search of the perfect quote for you. Our agents are dedicated to finding quotes with the
					most coverage and at the cheapest price that will meet your needs. Fill out an insurance quote, and an
					agent will be in touch with you shortly.
				</p>
			</div>
		</div>
	@endif
@endsection