@extends('layouts.default')

@section('headContent')
	{{ HTML::style("/css/contact.css") }}
@endsection

@section('pageTitle')
	Contact Us
@endsection

@section('content')
	<div class="row">
		<div class="col-xs-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Address &amp; Office Hours</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-3">
							<p>Address</p>
						</div>
						<div class="col-xs-7">
							<p>
								Murray White Insurance, Inc.<br />
								1911 N Main St, High Point, North Carolina 27262
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<p>Office hours</p>
						</div>
						<div class="col-xs-7">
							<p>Monday - Friday, 8:00AM - 6:00PM</p>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Contact Information</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-3">
							<p>Phone</p>
						</div>
						<div class="col-xs-7">
							<p>(336) 889-4747</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<p>Email</p>
						</div>
						<div class="col-xs-7">
							<p>{{ HTML::mailto("murraywhite@murraymwhiteinc.com") }}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<p>Social media</p>
						</div>
						<div class="col-xs-7">
							<p>{{ HTML::link("https://www.facebook.com/MurrayWhiteInsuranceAgency") }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Send Us a Message</h3>
				</div>
				<div class="panel-body">
					{{ Form::open(["url" => "contact", "class" => "form"]) }}
						{{ Form::text("firstName", Form::old("firstName"), ["placeholder" => "First Name", "class" => "form-control"]) }}
						{{ Form::text("lastName", Form::old("lastName"), ["placeholder" => "Last Name", "class" => "form-control"]) }}
						{{ Form::text("email", Form::old("email"), ["placeholder" => "Email Address", "class" => "form-control"]) }}
						{{ Form::label("message", "Message") }}
						{{ Form::textarea("message", Form::old("message"), ["class" => "form-control"]) }}
						{{ Form::submit("Send Message", ["class" => "btn btn-primary pull-right"]) }}
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@endsection