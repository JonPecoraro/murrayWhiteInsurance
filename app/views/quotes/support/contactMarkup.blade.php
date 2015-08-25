<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Contact Information</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-6">
						{{ Form::label("name", "* Primary Contact Name") }}
						{{ Form::text("name", Input::old("name"), ["class" => "form-control required"]) }}
					</div>
					<div class="col-xs-4">
						{{ Form::label("mailingAddress", "* Mailing Address") }}
						{{ Form::text("mailingAddress", Input::old("mailingAddress"), ["class" => "form-control required"]) }}
					</div>
					<div class="col-xs-2">
						{{ Form::label("zipcode", "* Zip Code") }}
						{{ Form::text("zipcode", Input::get("zipcode"), ["class" => "form-control required"]) }}
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						{{ Form::label("phone", "* Phone Number") }}
						{{ Form::text("phone", Input::old("phone"), ["class" => "form-control required", "placeholder" => "xxx-xxx-xxxx"]) }}
					</div>
					<div class="col-xs-6">
						{{ Form::label("county", "County") }}
						{{ Form::text("county", Input::old("county"), ["class" => "form-control"]) }}
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						{{ Form::label("email", "* Email Address") }}
						{{ Form::text("email", Input::old("email"), ["class" => "form-control required"]) }}
					</div>
					<div class="col-xs-6">
						{{ Form::label("contactPreference", "Contact Preference") }} <br />
						{{ Form::label("contactPreferenceMorning", "Morning")}}
						{{ Form::radio("contactPreference[]", "Morning", ["id" => "contactPreferenceMorning"]) }}&nbsp;
						{{ Form::label("contactPreferenceAfternoon", "Afternoon")}}
						{{ Form::radio("contactPreference[]", "Afternoon", ["id" => "contactPreferenceAfternoon"]) }}&nbsp;
						{{ Form::label("contactPreferenceEmail", "Through Email")}}
						{{ Form::radio("contactPreference[]", "Email", ["id" => "contactPreferenceEmail"]) }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
