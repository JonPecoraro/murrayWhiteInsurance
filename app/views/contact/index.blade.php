@extends('layouts.default')

@section('headContent')
	{{ HTML::style("/css/contact.css") }}
@endsection

@section('scriptFiles')
	{{ HTML::script("https://maps.googleapis.com/maps/api/js") }}
	{{ HTML::script("/js/contact.js") }}
@endsection

@section('pageTitle')
	Contact Us
@endsection

@if (Request::has("btnSubmit"))
	<?php
		Mail::send('emails.contact', Request::all(), function($message)
		{
		    $message->to('murraywhite@murraymwhiteinc.com', 'Murray White')->subject('Website Contact Form Submitted');
		});
		$messageReceived = true;
	?>
@endif

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
								1911 N Main St<br />
								High Point, North Carolina 27262
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<p>Office hours</p>
						</div>
						<div class="col-xs-7">
							<p>Monday - Friday, 8:30AM - 5:00PM</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<p>Map</p>
						</div>
						<div class="col-xs-7">
							<div id="map"></div>
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
					{{ Form::open(["url" => "contact", "class" => "form", "id" => "contactForm", "name" => "contactForm"]) }}
						@if (isset($messageReceived))
							<p class="bg-success successBg">
								<span class="glyphicon glyphicon-ok"></span>
								Thank you for your feedback. We have received your message.
							</p>
						@endif
						<p class="bg-danger errorBg hide">
							<span class="glyphicon glyphicon-remove"></span>
							Please fill out the required fields highlighted below
						</p>
						{{ Form::label("firstName", "* First Name") }}
						{{ Form::text("firstName", Form::old("firstName"), ["placeholder" => "First Name", "class" => "form-control required"]) }}
						{{ Form::label("lastName", "* Last Name") }}
						{{ Form::text("lastName", Form::old("lastName"), ["placeholder" => "Last Name", "class" => "form-control required"]) }}
						{{ Form::label("email", "Email Address") }}
						{{ Form::text("email", Form::old("email"), ["placeholder" => "Email Address", "class" => "form-control"]) }}
						{{ Form::label("contactMessage", "* Message") }}
						{{ Form::textarea("contactMessage", Form::old("contactMessage"), ["class" => "form-control required"]) }}
						{{ Form::submit("Send Message", ["class" => "btn btn-primary pull-right", "name" => "btnSubmit"]) }}
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@endsection