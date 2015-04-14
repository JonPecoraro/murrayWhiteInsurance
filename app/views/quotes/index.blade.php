@extends('layouts.default')

@section('headContent')
	{{ HTML::style("/css/quotes.css") }}
@endsection

@section('content')
	@if (Input::has("type"))
		<?php $type = Input::get("type"); ?>
		@if ($type === "auto")
			@include("quotes.auto")
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
		<div class="row">
			<div class="col-xs-7">
				{{ HTML::image("/img/meeting.jpg", "meeting photo", ["class" => "img-responsive img-rounded", "align" => "left"]) }}
			</div>
			<div class="col-xs-5">
				<h3>Request a Quote</h3>
				{{ Form::open(["class" => "form"]) }}
					{{ Form::select("type",
						[
							"auto" => "Auto"
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
					{{ Form::submit("Get Quote", ["class" => "btn btn-primary"]) }}
				{{ Form::close() }}
			</div>
		</div>
	@endif
@endsection