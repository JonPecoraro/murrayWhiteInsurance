@extends('layouts.default')

@section('headContent')
	{{ HTML::style("/css/index.css") }}
@endsection

@section('content')
	<div class="row">
		<div class="col-xs-7">
			{{ HTML::image("/img/buildingScaled.jpg", "Murray White Insurance office building", ["class" => "img-responsive img-rounded"]) }} 
		</div>
		<div class="col-xs-5">
			<h2>Request a Quote</h2>
			{{ Form::open(["url" => "quotes", "class" => "form"]) }}
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
				<p id="quoteHint">A representative from Murray White Insurance Agency will get in touch with you upon completing your quote.</p>
			{{ Form::close() }}
		</div>
	</div>
@endsection