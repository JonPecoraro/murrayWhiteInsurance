@section('scriptFiles')
	{{ HTML::script("/js/autoQuote.js") }}
@endsection

@section('pageTitle')
	Auto Quote
@endsection

<?php
	$arrStates = DB::select("SELECT * FROM states");
	$stateOptions = ["" => ""];
	foreach ($arrStates as $state)
	{
		$stateOptions[$state->abbreviation] = $state->abbreviation;
	}
?>

@if (Request::has("btnSubmit"))
	<?php
		Mail::send('emails.autoQuote', Request::all(), function($message)
		{
		    $message->to('jonathanpecoraro@yahoo.com', 'Jon Pecoraro')->subject('New Auto Quote Request');
		});
	?>
@endif

{{ Form::open(["url" => "autoQuote", "class" => "form"]) }}
	<!-- top -->
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Contact Information</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-6">
							{{ Form::label("phone", "* Contact Number") }}
							{{ Form::text("phone", Input::old("phone"), ["class" => "form-control required", "placeholder" => "xxx-xxx-xxxx"]) }}
						</div>
						<div class="col-xs-6">
							{{ Form::label("mailingAddress", "* Mailing Address") }}
							{{ Form::text("mailingAddress", Input::old("mailingAddress"), ["class" => "form-control required"]) }}
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6">
							{{ Form::label("garagingAddress", "Garaging Address") }}
							{{ Form::text("garagingAddress", Input::old("garagingAddress"), ["class" => "form-control"]) }}
						</div>
						<div class="col-xs-6">
							{{ Form::label("county", "County") }}
							{{ Form::text("county", Input::old("county"), ["class" => "form-control"]) }}
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6">
							{{ Form::label("currentPremium", "Current Auto Policy Premium &amp; Coverage") }}
							<div class="input-group">
								<span class="input-group-addon">$</span>
								{{ Form::text("currentPremium", Input::old("currentPremium"), ["class" => "form-control"]) }}
							</div>
						</div>
						<div class="col-xs-6">
							{{ Form::label("nonDrivers", "Any non-drivers in the household?") }} <br />
							{{ Form::label("nonDriverYes", "Yes")}}
							{{ Form::radio("nonDrivers[]", "Yes", ["id" => "nonDriverYes"]) }}&nbsp;
							{{ Form::label("nonDriverNo", "No")}}
							{{ Form::radio("nonDrivers[]", "No", ["id" => "nonDriverNo"]) }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<!-- left side -->
		<div class="col-xs-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Insured Drivers</h3>
				</div>
				<div class="panel-body">
					<div id="insuredDrivers">
						<div class="insuredDriver" data-driver-id="1">
							<div class="panel panel-default readOnly hide">
								<div class="panel-body">
									<span class="driverName pull-left">&nbsp;</span>
									<span title="Remove" class="removeDriver glyphicon glyphicon-remove pull-right"></span>
									<span title="Edit" class="editDriver glyphicon glyphicon-pencil pull-right">&nbsp;</span>
								</div>
							</div>
							<div class="edit">
								<div class="row">
									<div class="col-xs-6">
										{{ Form::label("firstName_1", "* First Name") }}
										{{ Form::text("firstName_1", Input::old("firstName_1"), ["class" => "form-control required"]) }}
									</div>
									<div class="col-xs-6">
										{{ Form::label("lastName_1", "* Last Name") }}
										{{ Form::text("lastName_1", Input::old("lastName_1"), ["class" => "form-control required"]) }}
									</div>
								</div>
								<div class="row dateOfBirthRow">
									<div class="col-xs-12">
										{{ Form::label("dateOfBirth_1", "* Date of Birth", ["class" => "dateOfBirthLabel"]) }}
										<div class="row">
											<div class="col-xs-4">
												{{ Form::selectMonth("dateOfBirthMonth_1", Input::old("dateOfBirthMonth_1"), ["id" => "dateOfBirthMonth_1", "class" => "form-control dateOfBirthMonth required"]) }}
											</div>
											<div class="col-xs-4">
												{{ Form::select("dateOfBirthDay_1", ["" => "Day"], Input::old("dateOfBirthDay_1"), ["id" => "dateOfBirthDay_1", "class" => "form-control dateOfBirthDay required"]) }}
											</div>
											<div class="col-xs-4">
												{{ Form::selectYear("dateOfBirthYear_1", Date("Y"), 1900, Input::old("dateOfBirthYear_1"), ["id" => "dateOfBirthYear_1", "class" => "form-control dateOfBirthYear required"]) }}
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-4">
										{{ Form::label("social_1", "* Social Security #") }}
										{{ Form::text("social_1", Input::old("social_1"), ["placeholder" => "xxx-xx-xxxx", "class" => "form-control required"]) }}
									</div>
									<div class="col-xs-5">
										{{ Form::label("license_1", "* License Number") }}
										{{ Form::text("license_1", Input::old("license_1"), ["class" => "form-control required"]) }}
									</div>
									<div class="col-xs-3">
										{{ Form::label("state_1", "State") }}
										{{ Form::select("state_1", $stateOptions, Input::old("state_1"), ["id" => "state_1", "class" => "form-control state"]) }}
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<button id="addDriver" class="btn btn-primary pull-right" type="button">Add Another Driver</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- right side -->
		<div class="col-xs-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Vehicle Information</h3>
				</div>
				<div class="panel-body">
					<div id="vehicles">
						<div class="vehicle" data-vehicle-id="1">
							<div class="panel panel-default readOnlyVehicle hide">
								<div class="panel-body">
									<span class="vehicleDescription pull-left">&nbsp;</span>
									<span title="Remove" class="removeVehicle glyphicon glyphicon-remove pull-right"></span>
									<span title="Edit" class="editVehicleIcon glyphicon glyphicon-pencil pull-right">&nbsp;</span>
								</div>
							</div>
							<div class="editVehicle">
								<div class="row">
									<div class="col-xs-4">
										{{ Form::label("vehicleYear_1", "* Year") }}
										{{ Form::text("vehicleYear_1", Input::old("vehicleYear_1"), ["class" => "form-control required"]) }}
									</div>
									<div class="col-xs-4">
										{{ Form::label("make_1", "* Make") }}
										{{ Form::text("make_1", Input::old("make_1"), ["class" => "form-control required"]) }}
									</div>
									<div class="col-xs-4">
										{{ Form::label("model_1", "* Model") }}
										{{ Form::text("model_1", Input::old("model_1"), ["class" => "form-control required"]) }}
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										{{ Form::label("vinNumber_1", "* VIN Number") }}
										{{ Form::text("vinNumber_1", Input::old("vinNumber_1"), ["class" => "form-control required"]) }}
									</div>
									<div class="col-xs-6">
										{{ Form::label("mileage_1", "* Mileage") }}
										{{ Form::text("mileage_1", Input::old("mileage_1"), ["class" => "form-control required"]) }}
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										{{ Form::label("usage_1", "Usage") }}
										{{ Form::text("usage_1", Input::old("usage_1"), ["class" => "form-control"]) }}
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										{{ Form::label("features_1", "Special Features") }}
										{{ Form::text("features_1", Input::old("features_1"), ["class" => "form-control"]) }}
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<button id="addVehicle" class="btn btn-primary pull-right" type="button">Add Another Vehicle</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row buttonRow">
		<div class="col-xs-12">
			{{ Form::button("Cancel", ["id" => "btnCancel", "class" => "btn btn-default pull-left"]) }}
			{{ Form::submit("Get Quote", ["name" => "btnSubmit", "class" => "btn btn-primary pull-right"]) }}
		</div>
	</div>
{{ Form::close() }}

<!-- insured driver template -->
<div id="insuredDriversTemplate" class="hide" data-driver-id="1">
	<div class="panel panel-default readOnly hide">
		<div class="panel-body">
			<span class="driverName pull-left">&nbsp;</span>
			<span title="Remove" class="removeDriver glyphicon glyphicon-remove pull-right"></span>
			<span title="Edit" class="editDriver glyphicon glyphicon-pencil pull-right">&nbsp;</span>
		</div>
	</div>
	<div class="edit">
		<div class="row">
			<div class="col-xs-6">
				{{ Form::label("firstName_0", "* First Name") }}
				{{ Form::text("firstName_0", Input::old("firstName_0"), ["class" => "form-control required"]) }}
			</div>
			<div class="col-xs-6">
				{{ Form::label("lastName_0", "* Last Name") }}
				{{ Form::text("lastName_0", Input::old("lastName_0"), ["class" => "form-control required"]) }}
			</div>
		</div>
		<div class="row dateOfBirthRow">
			<div class="col-xs-12">
				{{ Form::label("dateOfBirth_0", "* Date of Birth", ["class" => "dateOfBirthLabel"]) }}
				<div class="row">
					<div class="col-xs-4">
						{{ Form::selectMonth("dateOfBirthMonth_0", Input::old("dateOfBirthMonth_0"), ["id" => "dateOfBirthMonth_0", "class" => "form-control dateOfBirthMonth required"]) }}
					</div>
					<div class="col-xs-4">
						{{ Form::select("dateOfBirthDay_0", ["" => "Day"], Input::old("dateOfBirthDay_0"), ["id" => "dateOfBirthDay_0", "class" => "form-control dateOfBirthDay required"]) }}
					</div>
					<div class="col-xs-4">
						{{ Form::selectYear("dateOfBirthYear_0", Date("Y"), 1900, Input::old("dateOfBirthYear_0"), ["id" => "dateOfBirthYear_0", "class" => "form-control dateOfBirthYear required"]) }}
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				{{ Form::label("social_0", "* Social Security #") }}
				{{ Form::text("social_0", Input::old("social_0"), ["placeholder" => "xxx-xx-xxxx", "class" => "form-control required"]) }}
			</div>
			<div class="col-xs-5">
				{{ Form::label("license_0", "* License Number") }}
				{{ Form::text("license_0", Input::old("license_0"), ["class" => "form-control required"]) }}
			</div>
			<div class="col-xs-3">
				{{ Form::label("state_0", "State") }}
				{{ Form::select("state_0", $stateOptions, Input::old("state_0"), ["id" => "state_0", "class" => "form-control state"]) }}
			</div>
		</div>
	</div>
</div>
