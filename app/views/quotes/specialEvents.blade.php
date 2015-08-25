@section('scriptFiles')
	{{ HTML::script("/js/autoQuote.js") }}
@endsection

@section('pageTitle')
	Special Events
@endsection

<?php
	$arrStates = DB::select("SELECT * FROM states");
	$stateOptions = ["" => ""];
	foreach ($arrStates as $state)
	{
		$stateOptions[$state->abbreviation] = $state->abbreviation;
	}
?>

{{ Form::open(["url" => "autoQuote", "id" => "autoQuoteForm", "class" => "form"]) }}
	@include("quotes.support.errorMessageMarkup")

	<!-- top -->
	@include("quotes.support.contactMarkup")
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Event Details</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-6">
							<div class="row">
								<div class="col-xs-12">
									{{ Form::label("eventType", "* Type of Event") }}
									{{ Form::text("eventType", Input::old("eventType"), ["class" => "form-control required"]) }}
								</div>
								<div class="col-xs-12">
									{{ Form::label("eventLocation", "* Event Location") }}
									{{ Form::text("eventLocation", Input::old("eventLocation"), ["class" => "form-control required"]) }}
								</div>
								<div class="col-xs-12">
									{{ Form::label("eventCost", "Estimated Event Cost") }}
									<div class="input-group">
										<span class="input-group-addon">$</span>
										{{ Form::text("eventCost", Input::old("eventCost"), ["class" => "form-control"]) }}
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6">
							{{ Form::label("eventDescription", "Event Description") }}
							{{ Form::textarea("eventDescription", Input::old("eventDescription"), ["class" => "form-control"]) }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include("quotes.support.buttonRowMarkup")
{{ Form::close() }}