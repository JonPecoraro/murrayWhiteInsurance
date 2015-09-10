@extends('layouts.default')

@section('headContent')
	{{ HTML::style("/css/insurance.css") }}
@endsection

@section('pageTitle')
	Insurance Options
@endsection

@section('content')
	<div class="row">
		<div class="col-xs-12">
			<ul id="insuranceTabs" class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">Personal Lines</a>
				</li>
				<li role="presentation">
					<a href="#commercial" aria-controls="commercial" role="tab" data-toggle="tab">Commercial Lines</a>
				</li>
				<li role="presentation">
					<a href="#life" aria-controls="life" role="tab" data-toggle="tab">Life &amp; Health Lines</a>
				</li>
				<li role="presentation">
					<a href="#specialEvents" aria-controls="specialEvents" role="tab" data-toggle="tab">Special Events</a>
				</li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="personal">
					<p>
						Personal insurance is the type of insurance commonly sold to individuals and families. Our
						personal lines of insurance encompass a wide variety of coverage; anything from buying your first
						house to trying out a new boat. Personal lines of insurance may include:
						<ul>
							<li>Auto</li>
							<li>Homeowners</li>
							<li>Renters</li>
							<li>Farms</li>
							<li>Personal Umbrella (Excess Liability)</li>
							<li>Watercraft</li>
							<li>Personal Article Floaters</li>
						</ul>
						If you have a need for personal insurance that is not listed, {{ HTML::link("contact", "contact us") }}
						and we'll let you know if we can find a solution for your insurance coverage.
					</p>
				</div>
				<div role="tabpanel" class="tab-pane" id="commercial">
					<div class="row">
						<div class="col-xs-6">
							<p>
								Commercial insurance is offered for business and commercial enterprise owners. Our high quality
								commercial insurance lines remove the stress from business owners so they don't have to worry if
								their assets are covered when unique situations arise. Commercial lines of insurance may include:
								<ul>
									<li>Auto dealers</li>
									<li>Restaurants</li>
									<li>Garages</li>
									<li>Colleges</li>
									<li>Universities</li>
									<li>Churches</li>
									<li>Schools</li>
									<li>Contractors</li>
									<li>Printers</li>
									<li>Manufacturers</li>
									<li>Machine shops</li>
									<li>Environmental and Hazardous Waste</li>
									<li>Warehouses</li>
									<li>Retails and Wholesale</li>
									<li>Airports and Aircraft</li>
								</ul>
							</p>
							If you have a need for commercial insurance that is not listed, contact us and we'll let you know if we can find a solution for your insurance coverage.
						</div>
						<div class="col-xs-6">
							{{ HTML::image("/img/commercialBuildingScaled.jpg", "Commercial Building") }}
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="life">
					<p>
						Life and health insurance gives you and your family the satisfaction to know that they will be
						covered in the case of a misfortune. The value of protecting your loved ones during trying times is
						priceless. Life and health insurance lines commonly cover situations such as:
						<ul>
							<li>Life, Accidental Death &amp; Dismemberment (AD&amp;D)</li>
							<li>Payroll Deduction Voluntary Life, Accident, Disability &amp; Cancer</li>
							<li>Medical-PPO &amp; HMO-Conventional and alternate Funding</li>
							<li>Dental Employer Sponsored and 100% Voluntary</li>
							<li>Short-Term and Long-Term Disability</li>
							<li>Prescription Drug Card</li>
							<li>Long Term Care Plans</li>
							<li>Travel Accident Plans</li>
							<li>College Student Accident/Medical &amp; Athletic Coverage</li>
						</ul>
						If you have a need for life or health insurance that is not listed, contact us and we'll let you know if we can find a solution for your insurance coverage.
					</p>
				</div>
				<div role="tabpanel" class="tab-pane" id="specialEvents">
					<p>
						Whether it is a wedding, gold tournament or another event with a general or liquor liability exposure,
						USLI offers four products to cover a variety of special event coverage needs. In addition to
						competitive coverage, they can offer the stability of an A++ A.M. Best rated company. Consider USLI
						for your special event business to make each event perfect for your customers!
						<ul>
							<li>Main Event</li>
							<li>Wedding Plus</li>
							<li>The Host</li>
							<li>The Long Shot</li>
						</ul>
						Details about the options from USLI are available from the {{ HTML::link("http://customers.usli.com/SpecialEvents/index.html", "USLI website") }}.<br />
						{{ HTML::link("https://services.usli.com/InstantQuote/?id=4709&templateID=53&mode=spe", "Request a quote", ["target" => "_blank"]) }} for a special event today!
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection